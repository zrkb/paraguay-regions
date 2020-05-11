# Paraguay Regions

### Installation

```bash
$ composer require zrkb/paraguay-regions
```

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

Run the following command:

```bash
$ php artisan db:seed --class=ParaguayRegionsSeeder
```