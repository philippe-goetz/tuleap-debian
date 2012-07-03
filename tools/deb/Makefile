# Dependency Hierarchy
# ====================
# tuleap => tuleap-core, tuleap-plugins, tuleap-plugin-
# tuleap-core => mysql, php-
# tuleap-plugins => tuleap-core
# tuleap-plugin-* => tuleap-plugins

all: plugins themes
.PHONY: all

plugins: \
  tuleap-plugins \
  tuleap-plugin-agiledashboard \
  tuleap-plugin-cardwall \
  tuleap-plugin-docman \
  tuleap-plugin-docmanwatermark \
  tuleap-plugin-forumml \
  tuleap-plugin-fulltextsearch \
  tuleap-plugin-git \
  tuleap-plugin-graphontrackers \
  tuleap-plugin-graphontrackersv5 \
  tuleap-plugin-hudson \
  tuleap-plugin-im \
  tuleap-plugin-ldap \
  tuleap-plugin-projectlinks \
  tuleap-plugin-requesthelp \
  tuleap-plugin-statistics \
  tuleap-plugin-template \
  tuleap-plugin-tracker \
  tuleap-plugin-tracker-date-reminder \
  tuleap-plugin-userlog \
  tuleap-plugin-webdav
.PHONY: plugins

test: tuleap-plugin-admindelegation

tuleap-plugins:
	rsync -av --delete --exclude=debian ../../plugins/pluginsadministration $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugins

tuleap-plugin-admindelegation:
	rsync -av --delete --exclude=debian ../../plugins/admindelegation $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-admindelegation

tuleap-plugin-agiledashboard:
	rsync -av --delete --exclude=debian ../../plugins/agiledashboard $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-agiledashboard

tuleap-plugin-cardwall:
	rsync -av --delete --exclude=debian ../../plugins/cardwall $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-cardwall

tuleap-plugin-docman:
	rsync -av --delete --exclude=debian ../../plugins/docman $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-docman

tuleap-plugin-docmanwatermark:
	rsync -av --delete --exclude=debian ../../plugins/docmanwatermark $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-docmanwatermark

tuleap-plugin-forumml:
	rsync -av --delete --exclude=debian ../../plugins/forumml $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-forumml

tuleap-plugin-fulltextsearch:
	rsync -av --delete --exclude=debian ../../plugins/fulltextsearch $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-fulltextsearch

tuleap-plugin-git:
	rsync -av --delete --exclude=debian ../../plugins/git $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-git

tuleap-plugin-graphontrackers:
	rsync -av --delete --exclude=debian ../../plugins/graphontrackers $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-graphontrackers

tuleap-plugin-graphontrackersv5:
	rsync -av --delete --exclude=debian ../../plugins/graphontrackersv5 $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-graphontrackersv5

tuleap-plugin-hudson:
	rsync -av --delete --exclude=debian ../../plugins/hudson $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-hudson

tuleap-plugin-im:
	rsync -av --delete --exclude=debian ../../plugins/IM $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-im

tuleap-plugin-ldap:
	rsync -av --delete --exclude=debian ../../plugins/ldap $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-ldap

tuleap-plugin-projectlinks:
	rsync -av --delete --exclude=debian ../../plugins/projectlinks $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-projectlinks

tuleap-plugin-statistics:
	rsync -av --delete --exclude=debian ../../plugins/statistics $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-statistics

tuleap-plugin-template:
	rsync -av --delete --exclude=debian ../../plugins/template $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-template

tuleap-plugin-tracker:
	rsync -av --delete --exclude=debian ../../plugins/tracker $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-tracker

tuleap-plugin-tracker-date-reminder:
	rsync -av --delete --exclude=debian ../../plugins/tracker_date_reminder $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-tracker-date-reminder

tuleap-plugin-userlog:
	rsync -av --delete --exclude=debian ../../plugins/userlog $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-userlog

tuleap-plugin-webdav:
	rsync -av --delete --exclude=debian ../../plugins/webdav $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-webdav


themes: tuleap-theme-codex tuleap-theme-codexstn tuleap-theme-codextab tuleap-theme-dawn tuleap-theme-savannah tuleap-theme-steerforge tuleap-theme-sttab
.PHONY: themes

tuleap-theme-codex:
	rsync -av --delete --exclude=debian ../../src/www/themes/CodeX $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-codex

tuleap-theme-codexstn:
	rsync -av --delete --exclude=debian ../../src/www/themes/CodexSTN $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-codexstn

tuleap-theme-codextab:
	rsync -av --delete --exclude=debian ../../src/www/themes/CodeXTab $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-codextab

tuleap-theme-dawn:
	rsync -av --delete --exclude=debian ../../src/www/themes/Dawn $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-dawn

tuleap-theme-savannah:
	rsync -av --delete --exclude=debian ../../src/www/themes/savannah $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-savannah

tuleap-theme-steerforge:
	rsync -av --delete --exclude=debian ../../src/www/themes/SteerForge $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-steerforge

tuleap-theme-sttab:
	rsync -av --delete --exclude=debian ../../src/www/themes/STTab $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-sttab

tuleap-theme-tuleap:
	rsync -av --delete --exclude=debian ../../src/www/themes/Tuleap $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-theme-tuleap

