all: tuleap-plugins
.PHONY: all

xall: tuleap-plugins tuleap-themes


tuleap-plugins: tuleap-plugin-agiledashboard \
                tuleap-plugin-cardwall \
                tuleap-plugin-docmanwatermark \
                tuleap-plugin-forumml \
                tuleap-plugin-fulltextsearch \
                tuleap-plugin-git \
                tuleap-plugin-graphontrackers \
                tuleap-plugin-hudson \
                tuleap-plugin-im \
                tuleap-plugin-ldap \
                tuleap-plugin-requesthelp \
                tuleap-plugin-tracker \
                tuleap-plugin-webdav
.PHONY: tuleap-plugins

tuleap-plugin-agiledashboard:
	rsync -av --delete --exclude=debian ../../plugins/agiledashboard $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-agiledashboard

tuleap-plugin-cardwall:
	rsync -av --delete --exclude=debian ../../plugins/cardwall $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-cardwall

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

tuleap-plugin-requesthelp:
	rsync -av --delete --exclude=debian ../../plugins/requesthelp $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-requesthelp

tuleap-plugin-tracker:
	rsync -av --delete --exclude=debian ../../plugins/tracker $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-tracker

tuleap-plugin-webdav:
	rsync -av --delete --exclude=debian ../../plugins/webdav $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-webdav


tuleap-themes: tuleap-theme-codex tuleap-theme-codexstn tuleap-theme-codextab tuleap-theme-dawn tuleap-theme-savannah tuleap-theme-steerforge tuleap-theme-sttab
.PHONY: tuleap-themes

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
