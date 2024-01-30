# Support

A support package that provides flexible and reusable helper methods and traits for commonly used functionalities.

### 📦 Requirements

The package requires PHP 8.0+ and follows the FIG standard PSR-4 to ensure a high level of interoperability between shared PHP code and is fully unit-tested.

### 📋 Features

- Easy register an event listener with the dispatcher.
- Easy begin the process a mailable.
- Easy to validate your application's incoming data.
- Allowing you to subscribe and listen for various events that occur within your application easily.
- And much more!

### 🔧 Installation

Install the package with the below command:

```sh
composer require hitechnix/support
```

### 📝 Usage

In this section, we'll show how you can make use of the available traits.

- The `EventTrait` makes it easy to add dispatching abilities to your classes.

```php
<?php

use Hitechnix\Support\Traits\EventTrait;

class FooRepository
{
    use EventTrait;

    public function foo()
    {
        $this->fireEvent('foo');
    }
}
```

- The `RepositoryTrait` makes it easy to create new instances of a model and to retrieve or override the model during runtime.

```php
use Hitechnix\Support\Traits\RepositoryTrait;

class FooRepository
{
    use RepositoryTrait;

    public function foo()
    {
        return $this->createModel();
    }
}
```

### 📨 Message

I hope you find this useful. If you have any questions, please create an issue.

### 🔐 Security

If you discover any security-related issues, please email support@hitechnix.com instead of using the issue tracker.

### 📖 License

This software is released under the [BSD 3-Clause][link-license] License. Please see the [LICENSE](LICENSE) file
or https://opensource.hitechnix.com/LICENSE.txt for more information.

### ✨ Contributors

Thanks goes to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <td align="center" valign="top" width="14.28%">
    <a href="https://trants.me">
      <img src="https://avatars.githubusercontent.com/u/40693126?v=4?s=100" width="100px;" alt="Son Tran Thanh" />
      <br />
      <sub>
        <b>Son Tran Thanh</b>
      </sub>
    </a>
    <br />
    <a href="#tool-trants" title="Tools">🔧</a>
    <a href="#infra-trants" title="Infrastructure (Hosting, Build-Tools, etc)">🚇</a>
    <a href="#maintenance-trants" title="Maintenance">🚧</a>
    <a href="https://github.com/hitechnix/support/commits?author=trants" title="Code">💻</a>
    <a href="https://github.com/hitechnix/support/commits?author=trants" title="Documentation">📖</a>
    <a href="https://github.com/hitechnix/support/pulls?q=is%3Apr+reviewed-by%3Atrants" title="Reviewed Pull Requests">👀</a>
  </td>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://allcontributors.org) specification.
Contributions of any kind welcome!

[link-license]: https://opensource.org/license/bsd-3-clause
