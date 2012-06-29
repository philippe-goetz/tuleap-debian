all:  tuleap-plugin-cardwall
.PHONY: all

xall:  tuleap-themes


tuleap-plugins: tuleap-plugin-agiledashboard
.PHONY: tuleap-plugins

tuleap-plugin-agiledashboard:
	rsync -av --delete --exclude=debian ../../plugins/agiledashboard $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-agiledashboard

tuleap-plugin-cardwall:
	rsync -av --delete --exclude=debian ../../plugins/cardwall $@
	cd $@; dpkg-buildpackage 
.PHONY: tuleap-plugin-cardwall


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
