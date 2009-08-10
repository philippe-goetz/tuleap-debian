#!/usr/bin/perl

#
# Copyright (c) STMicroelectronics, 2007. All Rights Reserved.

 # Originally written by Mohamed CHAARI, 2007
 #
 # This file is a part of codendi.
 #
 # codendi is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # codendi is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with codendi; if not, write to the Free Software
 # Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 #
 # $Id$
 #

=pod

This script aims at achieving the migration of archives, of all _active_ mailing-lists, to the ForumML database.
Only projects that enabled ForumML plugin are concerned by this migration.

=cut

# mailing-list name should contain only alphabetical characters, '-' and '.' 
sub validate_listname {
    my $arg = shift;
    my $listname = "";
    my $match = 0;

    # special mailing-lists should not be included
    my @exclude_ml = ("crolles.codex.system", "grenoble.codex.system");

    if($arg =~ /^([-.\w]+)$/) {
        foreach (@exclude_ml) {
        	if ($_ eq $1) {
    			$match = 1;
        	}
    	}
        if ($match == 0) {
	        $listname = $1;
	    }
    }
    return $listname;
}

use strict;
use DBI;

require "/usr/share/codendi/src/utils/include.pl";

## load local.inc variables
&load_local_config();

my $dbh = &db_connect();

# get all active mailing-lists
my $query = "SELECT list_name, group_id FROM mail_group_list WHERE status = 1";
my $req = $dbh->prepare($query);
$req->execute();
while (my ($list_name,$group_id) = $req->fetchrow()) {
	my $list = validate_listname($list_name);
	if(! $list eq "") {
		print "Processing ".$list." mailing-list ... \n";
		system("/usr/bin/php -e -q -c /etc/php.ini /usr/share/codendi/plugins/forumml/bin/mail_2_DB.php $list 2");
	}
}