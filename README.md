# Qreatip

## About Qreatip

A crowdsourcing platform on web-based (which contained in this repository) designated for people who worked on digital creative. Currently we focusing on 3D Artist, 2D Artist, Music Composer, & Voice Acting.

## Deployment

For production deployment, we highly recommended to not include any development dependencies which help preventing security vulnerabilities from it.

```sh
# Install from Packagist
composer install --no-dev

# Install from NodeJS
npm install --only=prod

# Compiling the stylesheet with Laravel mix (though it already included in repository, but we encourage you to recompile to prevent any misconfiguration)
npm run production

# Generate Key
php artisan key:generate
```
After installing dependencies, you need to configure your database connection and SMTP to deploy this software on ```.env``` (We already put a template on ```.env.example```).

After configuring the server environment, you could safely setup the database.
```sh
php artisan migrate:fresh

# Or if you want to use seed data
#
php artisan migrate:fresh --seed
```

## Contributing

Thank you for considering contributing to the Qreatip! Unfortunately we currently available to invited contributor only.

## Security Vulnerabilities

If you discover a security vulnerability within Qreatip, please send an e-mail to Fray Dalton via [fray117@exploiter.id](mailto:fray117@exploiter.id). All security vulnerabilities will be promptly addressed.

## License

The platform is developed under Laravel framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Our privacy policy is based on termly.io, hard coded images such as illustration are mainly provided from [Unsplash](https://unsplash.com/license) and/or icons are provided by Heroicons under the [MIT license](https://opensource.org/licenses/MIT).
