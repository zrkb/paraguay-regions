# Paraguay Regions


### Usage

After installation run:
```bash
$ php artisan vendor:publish --provider="Paraguay\Regions\RegionsServiceProvider" --force
```

Then:

```bash
$ composer du
```

#### Data Seed

This step is optional, but if you want to avoid `SQL Table Already Exists Error`, run. **Do NOT run on production enviroment!**:

```bash
$ php artisan migrate:fresh
```

And last, but not least:

```bash
$ php artisan db:seed --class=RegionsSeeder
```