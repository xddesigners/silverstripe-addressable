# Changelog

This project adheres to [Semantic Versioning](https://semver.org/). Releases: https://github.com/xddesigners/silverstripe-addressable/releases

## 1.0.0 (2026-11-22)

First release as `xddesigners/silverstripe-addressable`, the maintained continuation of
`symbiote/silverstripe-addressable` (last release 5.2.0) for Silverstripe CMS 6. Same `Symbiote\Addressable` namespace,
so it is a drop-in replacement.

- Silverstripe CMS 6 support.
- Fixed: with a single allowed country or state, a new record gets it as its default again (CMS 6 renamed the
  `populateDefaults` extension hook to `onAfterPopulateDefaults`).
- Fixed: geocoding no longer fails on a record without a Country.
- Fixed: PHP 8.4 deprecation for the implicitly nullable `$previous` in `GeocodeServiceException`.
- Tests run on PHPUnit 11; CI on GitHub Actions (PHP 8.3 and 8.4).
