# Development environment

## Stubs (WIP)

This project utilizes `php-stubs/wordpress-stubs` which provides WordPress stub declarations, see (project page on Packagist)[https://packagist.org/packages/php-stubs/wordpress-stubs] for more information.

### Install and configure stubs for WordPress

...

#### Step 1. Install dependency with composer

```bash
composer require --dev php-stubs/wordpress-stubs
```
#### Step 2. Configure Intelephense in IDE

> Assuming Visual Studio Code

Append `wordpress` to `intelephense.stubs` in VS Code's configuration.

```json
{
	"intelephense.stubs": [
		...
		"wordpress"
	]
}
```
