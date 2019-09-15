#!/usr/bin/perl
package EmailScraper;
use strict;
use warnings;
use Mail::IMAPClient;
use File::Spec;
use LWP::Simple;
use LWP::UserAgent;
use HTTP::Request;
use HTTP::Response;
use URI::Find;

my $count = 0;

my $browser = LWP::UserAgent->new();
$browser->timeout(10);

open(RESULTS, ">", "results.csv") or die "Couldn't open ./results.csv";
open(ACCOUNTS, "accounts.csv") or die "Couldn't open ./accounts.csv";
while(my $line = <ACCOUNTS>){
	my ($user, $password, $server, $port, $URL) = split(/,/, $line);
	my $account_count = 0;
	
	my @URLs;
	my $finder = URI::Find->new(sub{my ($uri) = shift; push(@URLs, $uri);});
	
	my $client = Mail::IMAPClient->new(
		Server   => $server,
		User     => $user,
		Password => $password,
		Port     => $port,
		Ssl      =>  1,
	) or die "Cannot connect through IMAPClient: $@";

	$client->select("inbox") or die "Cannot open inbox: $@\n";

	my @messages = $client->seen();

	foreach my $message (@messages){
		my $body = $client->body_string($message);
		$finder->find(\$body);
		foreach my $item (@URLs){
			if($item =~ m{$URL}){
				my $request = HTTP::Request->new(GET => $item);
				my $response = $browser->request($request);
				$count++;
				$account_count++;
			}
		}
	}
	
 	@messages = $client->unseen();

	foreach my $message (@messages){
		my $body = $client->body_string($message);
		$finder->find(\$body);
		foreach my $item (@URLs){
			if($item =~ m{$URL}){
				my $request = HTTP::Request->new(GET => $item);
				my $response = $browser->request($request);
				$count++;
				$account_count++;
			}
		}
		$client->deny_seeing($message);
	}
	$client->logout();
	
	print RESULTS "$user,$account_count\n";
}
print "Total count is: $count\n";
print RESULTS "total,$count\n";

close(ACCOUNTS);
close(RESULTS);