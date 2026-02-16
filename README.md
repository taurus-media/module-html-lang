# Taurus_HtmlLang Magento 2 Module

This module allows you to set a custom `lang` attribute on the `<html>` tag in your Magento 2 frontend, overriding the default locale-based value.

## Features

- Easily configure a custom `lang` attribute for each store view.
- Supports any valid language tag (e.g., `en-US`, `de-DE`, `fr-FR`, etc.).


## Installation

### Composer (Recommended)

1. Open your terminal and navigate to your Magento 2 root directory.
2. Run the following command:
   ```bash
   composer require taurus-media/module-html-lang
   ```
3. Enable the module:
   ```bash
   bin/magento module:enable Taurus_HtmlLang
   bin/magento setup:upgrade
   bin/magento setup:di:compile
   bin/magento setup:static-content:deploy
   ```

## Configuration

1. Log in to the Magento 2 Admin panel.
2. Navigate to **Stores** > **Settings** > **Configuration**.
3. Go to **General** > **General** > **Locale Options**.
4. Locate the field **Custom HTML Lang**.
5. Enter the desired language tag (e.g., `en-US`).
6. If left empty, the default Magento locale value will be used.
7. Click **Save Config**.
8. Flush the cache if necessary.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
