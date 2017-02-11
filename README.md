# Shopify Forms Bundle (Embed)

## Installation

**Install With Composer**

```json
{
   "require": {
       "sturple/shopify-retailers": "dev-master"
   }
}

```

and then execute

```json
$ composer update
```


## Configuration

**Add to ```app/AppKernel.php``` file**

```php

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            ...
             new Fgms\RetailersBundle\FgmsRetailersBundle();
        ]
    }
}

```

The following configuration options may/must be set in `config.yml`:

```yaml
fgms_retailers:
    api_key:            # API key for Shopify
    secret:             # Secret for Shopify
    scope:              # Scope for Shopify permissions.
```

## Shopify App Configuration

The bundle specifies the following routes which must be known to configure as a Shopify App:

- **Install:** `/install`
- **OAuth:** `/auth`
- **Home:** `/`
