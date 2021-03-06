# hiqdev/hidev-readme

## [0.6.2] - 2017-11-10

- Fixed to use `Twig_Loader_Array` <- deprecated `Twig_Loader_String`
    - [52bd183] 2017-11-10 csfixed [@hiqsol]
    - [7f4d712] 2017-11-10 typo [@hiqsol]
    - [b7aa55d] 2017-11-10 removed PHP 5.6 and 7.0 from Travis build [@hiqsol]
    - [85e2882] 2017-11-08 fixed to use `Twig_Loader_Array` <- deprecated Twig_Loader_String [@hiqsol]

## [0.6.1] - 2017-05-22

- Removed `README.txt` and `README.markdown`
    - [6dfdfb0] 2017-05-22 simplified config a bit: removed README.txt and README.markdown goals [@hiqsol]
- Removed `tests` config
    - [17733b3] 2017-05-22 csfixed [@hiqsol]
    - [e78b862] 2017-05-22 trying to fix problem with tests config [@hiqsol]

## [0.6.0] - 2017-05-03

- Redone to new hidev
    - [510859a] 2017-05-03 csfixed [@hiqsol]
    - [d579c1d] 2017-05-02 simplified to single controller [@hiqsol]
    - [971dc1d] 2017-05-01 fixing tests [@hiqsol]
    - [c42eacc] 2017-04-30 csfixed [@hiqsol]
    - [36f815a] 2017-04-29 renamed configs to `hidev.yml` in functional tests [@hiqsol]
    - [bec789d] 2017-04-29 renamed hidev config to `hidev.yml` <- .hidev/config.yml [@hiqsol]
    - [f0db89b] 2017-04-29 fixed unit tests [@hiqsol]
    - [0db6e2f] 2017-04-29 basically redone for new hidev [@hiqsol]
    - [6c31397] 2017-04-20 fixed tests by disabled `E_NOTICE` ??? [@hiqsol]
    - [410b993] 2017-04-20 removed phpunit 5 compatibility from `tests/_bootstrap` [@hiqsol]
    - [ec13d3b] 2017-04-19 removed require-dev phpunit [@hiqsol]
    - [3268f1c] 2017-04-19 csfixed [@hiqsol]
    - [8cba1db] 2017-04-19 fixed generated README.md [@hiqsol]
    - [5a6e199] 2017-03-31 quickfixed doubling sections with `array_unique` [@hiqsol]
    - [131a8c9] 2017-03-30 changed rendering header to simple prefixing [@hiqsol]

## [0.5.1] - 2017-03-23

- Added PHPUnit 6 compatibility
    - [df4472b] 2017-03-23 csfixed [@SilverFire]
    - [22df705] 2017-03-23 Added PHPUnit 6 compatibility [@SilverFire]
    - [4f1c319] 2017-03-23 Updated travis config [@SilverFire]
    - [2f316ca] 2017-03-14 still fixing tests for phpunit 6 [@hiqsol]
    - [f322251] 2017-03-14 still fixing tests for phpunit 6 [@hiqsol]
    - [23ee6cc] 2017-03-14 added require-dev phpunit 6 [@hiqsol]
    - [e61f481] 2017-03-14 fixed tests for phpunit 6 [@hiqsol]

## [0.5.0] - 2017-03-14

- Changed rendering headers to #-prefix style
    - [7b0f691] 2017-03-14 fixed tests [@hiqsol]
    - [2e3680c] 2017-03-08 fixing tests [@hiqsol]
    - [4e5ae8e] 2017-03-08 csfixed [@hiqsol]
    - [2f59571] 2017-03-08 changed rendering headers to #-prefix style [@hiqsol]

## [0.4.3] - 2016-08-01

- Added use of `chkipper`
    - [f777729] 2016-08-01 switched to chkipper [@hiqsol]
- Fixed preparing sections list
    - [7fb19a2] 2016-06-14 csfixed [@hiqsol]
    - [5de13dc] 2016-06-14 fixed preparing sections list [@hiqsol]
    - [493e2e2] 2016-05-28 csfixed [@hiqsol]
    - [6adb394] 2016-05-21 setting aliases moved to functional Tester [@hiqsol]
    - [0d12aa3] 2016-05-21 fixed tests [@hiqsol]

## [0.4.2] - 2016-05-21

- Changed: redone to `composer-config-plugin`
    - [aca95d1] 2016-05-21 redoing to composer-config-plugin [@hiqsol]
    - [c038f3b] 2016-05-21 redoing to composer-config-plugin [@hiqsol]

## [0.4.1] - 2016-05-16

- Added better functional tests
    - [bc573a4] 2016-05-16 GREATLY improved functional tests [@hiqsol]

## [0.4.0] - 2016-05-15

- Changed: redone functional tests to new scheme
    - [31a5e70] 2016-05-15 redone functional tests to new scheme [@hiqsol]
    - [fc1dcb0] 2016-05-15 + gitignore runtime [@hiqsol]
- Changed: rearranged config to new scheme
    - [a247627] 2016-05-15 added `Acknowledgements` section [@hiqsol]
    - [f91f0c0] 2016-05-15 added phpdocs [@hiqsol]
    - [3c8f0f2] 2016-05-15 rearranged config to new scheme [@hiqsol]

## [0.3.6] - 2016-05-06

- Changed `@prjdir` -> `@root`
    - [2938ace] 2016-05-06 redone to locally installed hidev plugins [@hiqsol]
    - [451e624] 2016-05-06 changed `@prjdir` -> `@root` [@hiqsol]

## [0.3.5] - 2016-04-15

- Fixed `hiqdev/composer-extension-plugin` version constraint
    - [02608d5] 2016-04-15 fixed `hiqdev/composer-extension-plugin` version constraint [@hiqsol]

## [0.3.4] - 2016-04-14

- Fixed build with asset-packagist and proper requires
    - [0aed39c] 2016-04-13 fixed require for `hiqdev/composer-extension-plugin` again [@hiqsol]
    - [9a35cbe] 2016-04-13 fixed require for `hiqdev/composer-extension-plugin` [@hiqsol]
    - [1d1dd9e] 2016-04-13 + require yiisoft/yii2/Yii.php in `tests/_bootstrap.php` [@hiqsol]
    - [0d10826] 2016-04-13 fixed build with asset-packagist [@hiqsol]
- Changed to `hidev-config` <- `extension-config`
    - [9eebd97] 2016-04-13 redone to `hidev-config` <- `extension-config` [@hiqsol]

## [0.3.3] - 2016-03-30

- Changed `extension-config` <- `yii2-extraconfig`
    - [e1127c7] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [@hiqsol]
    - [672f1c1] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [@hiqsol]

## [0.3.2] - 2016-03-25

- Fixed badges
    - [b4c5544] 2016-03-24 fixed badges [@hiqsol]

## [0.3.1] - 2016-02-19

- Fixed to work when no package manager available
    - [c311942] 2016-02-19 rehideved [@hiqsol]
    - [9d00cf9] 2016-02-19 fixed to work when no package manager available [@hiqsol]

## [0.3.0] - 2016-01-15

- Fixed tests
    - [9e9810e] 2016-01-14 fixed tests [@hiqsol]
    - [d99c6f2] 2016-01-14 removed debug logging [@hiqsol]
    - [5f3a4b2] 2016-01-14 changed hidev-travis-ci -> hidev-travis [@hiqsol]
    - [fd08580] 2016-01-14 still debugging [@hiqsol]
    - [3b65f7a] 2016-01-14 debugging travis [@hiqsol]
- Changed goals -> controllers
    - [cc14a66] 2016-01-13 renamed get -> take [@hiqsol]
    - [4cae11b] 2016-01-13 redone goals to controllers [@hiqsol]
- Changed: redone with yii2-extraconfig
    - [8cd02be] 2016-01-14 redone to composer-extension-plugin from plugin-manager [@hiqsol]
    - [f0a4063] 2016-01-13 removed Plugin in favour of extraconfig [@hiqsol]
    - [1bc87ce] 2016-01-06 changed config structure [@hiqsol]
    - [47d1af3] 2016-01-06 redoing with yii2-extraconfig [@hiqsol]

## [0.2.0] - 2015-12-23

- Added Travis `after_script` to upload coverage to Scrutinizer
    - [f149c5f] 2015-12-23 + Travis `after_script` to upload coverage to Scrutinizer [@hiqsol]
- Added distributed `markdownBadges` instead of local knownBadges
    - [53dec73] 2015-12-23 fixed build [@hiqsol]
    - [9d67663] 2015-12-23 added distributed `markdownBadges` instead of local knownBadges [@hiqsol]
- Added text README generation
    - [aeaf746] 2015-12-23 + text README generation [@hiqsol]

## [0.0.1] - 2015-12-23

- Added basics
    - [0f49463] 2015-12-22 looks working [@hiqsol]
    - [da24b41] 2015-12-21 inited [@hiqsol]
## Development started 2015-12-21

## [Development started] - 2015-12-21

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[aca95d1]: https://github.com/hiqdev/hidev-readme/commit/aca95d1
[c038f3b]: https://github.com/hiqdev/hidev-readme/commit/c038f3b
[bc573a4]: https://github.com/hiqdev/hidev-readme/commit/bc573a4
[31a5e70]: https://github.com/hiqdev/hidev-readme/commit/31a5e70
[fc1dcb0]: https://github.com/hiqdev/hidev-readme/commit/fc1dcb0
[a247627]: https://github.com/hiqdev/hidev-readme/commit/a247627
[f91f0c0]: https://github.com/hiqdev/hidev-readme/commit/f91f0c0
[3c8f0f2]: https://github.com/hiqdev/hidev-readme/commit/3c8f0f2
[2938ace]: https://github.com/hiqdev/hidev-readme/commit/2938ace
[451e624]: https://github.com/hiqdev/hidev-readme/commit/451e624
[02608d5]: https://github.com/hiqdev/hidev-readme/commit/02608d5
[0aed39c]: https://github.com/hiqdev/hidev-readme/commit/0aed39c
[9a35cbe]: https://github.com/hiqdev/hidev-readme/commit/9a35cbe
[1d1dd9e]: https://github.com/hiqdev/hidev-readme/commit/1d1dd9e
[0d10826]: https://github.com/hiqdev/hidev-readme/commit/0d10826
[9eebd97]: https://github.com/hiqdev/hidev-readme/commit/9eebd97
[e1127c7]: https://github.com/hiqdev/hidev-readme/commit/e1127c7
[672f1c1]: https://github.com/hiqdev/hidev-readme/commit/672f1c1
[b4c5544]: https://github.com/hiqdev/hidev-readme/commit/b4c5544
[c311942]: https://github.com/hiqdev/hidev-readme/commit/c311942
[9d00cf9]: https://github.com/hiqdev/hidev-readme/commit/9d00cf9
[9e9810e]: https://github.com/hiqdev/hidev-readme/commit/9e9810e
[d99c6f2]: https://github.com/hiqdev/hidev-readme/commit/d99c6f2
[5f3a4b2]: https://github.com/hiqdev/hidev-readme/commit/5f3a4b2
[fd08580]: https://github.com/hiqdev/hidev-readme/commit/fd08580
[3b65f7a]: https://github.com/hiqdev/hidev-readme/commit/3b65f7a
[cc14a66]: https://github.com/hiqdev/hidev-readme/commit/cc14a66
[4cae11b]: https://github.com/hiqdev/hidev-readme/commit/4cae11b
[8cd02be]: https://github.com/hiqdev/hidev-readme/commit/8cd02be
[f0a4063]: https://github.com/hiqdev/hidev-readme/commit/f0a4063
[1bc87ce]: https://github.com/hiqdev/hidev-readme/commit/1bc87ce
[47d1af3]: https://github.com/hiqdev/hidev-readme/commit/47d1af3
[f149c5f]: https://github.com/hiqdev/hidev-readme/commit/f149c5f
[53dec73]: https://github.com/hiqdev/hidev-readme/commit/53dec73
[9d67663]: https://github.com/hiqdev/hidev-readme/commit/9d67663
[aeaf746]: https://github.com/hiqdev/hidev-readme/commit/aeaf746
[0f49463]: https://github.com/hiqdev/hidev-readme/commit/0f49463
[da24b41]: https://github.com/hiqdev/hidev-readme/commit/da24b41
[7fb19a2]: https://github.com/hiqdev/hidev-readme/commit/7fb19a2
[5de13dc]: https://github.com/hiqdev/hidev-readme/commit/5de13dc
[493e2e2]: https://github.com/hiqdev/hidev-readme/commit/493e2e2
[6adb394]: https://github.com/hiqdev/hidev-readme/commit/6adb394
[0d12aa3]: https://github.com/hiqdev/hidev-readme/commit/0d12aa3
[f777729]: https://github.com/hiqdev/hidev-readme/commit/f777729
[7b0f691]: https://github.com/hiqdev/hidev-readme/commit/7b0f691
[2e3680c]: https://github.com/hiqdev/hidev-readme/commit/2e3680c
[4e5ae8e]: https://github.com/hiqdev/hidev-readme/commit/4e5ae8e
[2f59571]: https://github.com/hiqdev/hidev-readme/commit/2f59571
[Under development]: https://github.com/hiqdev/hidev-readme/compare/0.6.1...HEAD
[0.4.3]: https://github.com/hiqdev/hidev-readme/compare/0.4.2...0.4.3
[0.4.2]: https://github.com/hiqdev/hidev-readme/compare/0.4.1...0.4.2
[0.4.1]: https://github.com/hiqdev/hidev-readme/compare/0.4.0...0.4.1
[0.4.0]: https://github.com/hiqdev/hidev-readme/compare/0.3.6...0.4.0
[0.3.6]: https://github.com/hiqdev/hidev-readme/compare/0.3.5...0.3.6
[0.3.5]: https://github.com/hiqdev/hidev-readme/compare/0.3.4...0.3.5
[0.3.4]: https://github.com/hiqdev/hidev-readme/compare/0.3.3...0.3.4
[0.3.3]: https://github.com/hiqdev/hidev-readme/compare/0.3.2...0.3.3
[0.3.2]: https://github.com/hiqdev/hidev-readme/compare/0.3.1...0.3.2
[0.3.1]: https://github.com/hiqdev/hidev-readme/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/hiqdev/hidev-readme/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/hiqdev/hidev-readme/compare/0.0.1...0.2.0
[0.0.1]: https://github.com/hiqdev/hidev-readme/releases/tag/0.0.1
[0.5.0]: https://github.com/hiqdev/hidev-readme/compare/0.4.3...0.5.0
[df4472b]: https://github.com/hiqdev/hidev-readme/commit/df4472b
[22df705]: https://github.com/hiqdev/hidev-readme/commit/22df705
[4f1c319]: https://github.com/hiqdev/hidev-readme/commit/4f1c319
[2f316ca]: https://github.com/hiqdev/hidev-readme/commit/2f316ca
[f322251]: https://github.com/hiqdev/hidev-readme/commit/f322251
[23ee6cc]: https://github.com/hiqdev/hidev-readme/commit/23ee6cc
[e61f481]: https://github.com/hiqdev/hidev-readme/commit/e61f481
[0.5.1]: https://github.com/hiqdev/hidev-readme/compare/0.5.0...0.5.1
[510859a]: https://github.com/hiqdev/hidev-readme/commit/510859a
[d579c1d]: https://github.com/hiqdev/hidev-readme/commit/d579c1d
[971dc1d]: https://github.com/hiqdev/hidev-readme/commit/971dc1d
[c42eacc]: https://github.com/hiqdev/hidev-readme/commit/c42eacc
[36f815a]: https://github.com/hiqdev/hidev-readme/commit/36f815a
[bec789d]: https://github.com/hiqdev/hidev-readme/commit/bec789d
[f0db89b]: https://github.com/hiqdev/hidev-readme/commit/f0db89b
[0db6e2f]: https://github.com/hiqdev/hidev-readme/commit/0db6e2f
[6c31397]: https://github.com/hiqdev/hidev-readme/commit/6c31397
[410b993]: https://github.com/hiqdev/hidev-readme/commit/410b993
[ec13d3b]: https://github.com/hiqdev/hidev-readme/commit/ec13d3b
[3268f1c]: https://github.com/hiqdev/hidev-readme/commit/3268f1c
[8cba1db]: https://github.com/hiqdev/hidev-readme/commit/8cba1db
[5a6e199]: https://github.com/hiqdev/hidev-readme/commit/5a6e199
[131a8c9]: https://github.com/hiqdev/hidev-readme/commit/131a8c9
[0.6.0]: https://github.com/hiqdev/hidev-readme/compare/0.5.1...0.6.0
[6dfdfb0]: https://github.com/hiqdev/hidev-readme/commit/6dfdfb0
[17733b3]: https://github.com/hiqdev/hidev-readme/commit/17733b3
[e78b862]: https://github.com/hiqdev/hidev-readme/commit/e78b862
[0.6.1]: https://github.com/hiqdev/hidev-readme/compare/0.6.0...0.6.1
[52bd183]: https://github.com/hiqdev/hidev-readme/commit/52bd183
[7f4d712]: https://github.com/hiqdev/hidev-readme/commit/7f4d712
[b7aa55d]: https://github.com/hiqdev/hidev-readme/commit/b7aa55d
[85e2882]: https://github.com/hiqdev/hidev-readme/commit/85e2882
[0.6.2]: https://github.com/hiqdev/hidev-readme/compare/0.6.1...0.6.2
