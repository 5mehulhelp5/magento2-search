# Koply Search — Magento 2 Module

AI-powered site search widget for Magento 2 stores, powered by [Koply](https://koply.eu).

## Requirements

- Magento 2.4.x
- PHP 8.1+

## Installation

### Via Composer (recommended)

```bash
composer require koply/magento2-search
php bin/magento module:enable Koply_Search
php bin/magento setup:upgrade
php bin/magento cache:clean
```

### Manual installation

1. Download the module ZIP
2. Extract to `app/code/Koply/Search/`
3. Run:

```bash
php bin/magento module:enable Koply_Search
php bin/magento setup:upgrade
php bin/magento cache:clean
```

## Configuration

1. Go to **Stores > Configuration > Koply > Search Widget**
2. Set **Enable** to **Yes**
3. Enter your **API Key** (found in your Koply panel under Sites > Embed)
4. Save configuration and flush cache

## How it works

The module injects the Koply widget script before `</body>` on all frontend pages.
It also registers a `koply.cart.add` event listener that handles add-to-cart
requests using Magento 2's native `/checkout/cart/add/` endpoint.

All search customization (colors, placeholder, locale) is done from your
[Koply panel](https://app.koply.eu) — no Magento configuration needed.

## Events

### `koply.cart.add`
Fired by the Koply widget when a user clicks "Add to cart".

**Event detail:**
```js
{
    entity_id: "595",   // Magento product entity_id
    qty: 1
}
```

### `koply.cart.added`
Fired after a successful add-to-cart request.

## Support

- Documentation: https://koply.eu/docs
- Email: support@koply.eu
