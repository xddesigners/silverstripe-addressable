# Addressable

Adds address fields to a DataObject, geocodes the address automatically (Google or Mapbox) and renders a static map,
for Silverstripe CMS 6.

This is the maintained continuation of
[symbiote/silverstripe-addressable](https://github.com/symbiote/silverstripe-addressable), whose last release (5.2.0)
supports CMS 4 and 5. The PHP namespace is unchanged (`Symbiote\Addressable`), so it is a drop-in replacement: no code
or config changes.

![CMS screenshot](https://user-images.githubusercontent.com/3859574/43246926-8b218be2-90f6-11e8-9929-72192e23fc81.png)

## Installation

```bash
composer require xddesigners/silverstripe-addressable
```

Run `dev/build?flush=all`.

### Switching from symbiote/silverstripe-addressable

```bash
composer remove symbiote/silverstripe-addressable
composer require xddesigners/silverstripe-addressable
```

If you installed a fork through a `vcs` entry under `repositories`, remove that entry too. This package declares
`replace: symbiote/silverstripe-addressable`, so modules that require the old name are satisfied by it. Your
`Symbiote\Addressable\Addressable` / `Geocodable` extensions, YAML config and templates keep working as they are.

## Requirements

- Silverstripe CMS 6 (silverstripe/framework ^6)
- PHP 8.3+

## Documentation

- [Quick Start](docs/en/quick-start.md)
- [Advanced Usage](docs/en/advanced-usage.md)
- [Changelog](CHANGELOG.md)
- [Contributing](CONTRIBUTING.md)

## Licence

BSD-3-Clause, see [LICENSE.md](LICENSE.md). Copyright (c) 2018 Symbiote; CMS 6 port and maintenance (c) 2026 Remy
Vaartjes.

## Credits

- Maintained by **Remy Vaartjes** ([xddesigners](https://github.com/xddesigners)).
- Originally written by [AJ Short](https://github.com/ajshort), developed by [Symbiote](https://www.symbiote.com.au/)
  and contributors.
- [Mark Taylor](https://github.com/symbiote/silverstripe-addressable/commit/7eb2f81c66502093c82c293943f43de9154ad807)
  added the ability to embed a map with `AddressMap`.
- [Nic](https://github.com/muskie9) wrote the tests.
