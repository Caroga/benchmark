# PHP benchmark
Simple PHP server benchmarking.

This tool can help you determine if a hosting environment is suited for your projects in terms of:
- PHP.ini setings that affect uploads;
- CPU speed available to your PHP instance;
- Disk IOPS available to your PHP instance;

## How to install:
    composer create-project hyperized/benchmark
    
Copy the `/config/config.yml.example` to `/config/config.yml` and adjust to your preferences.
    
## How to run:

### Locally with CLI
    php benchmark.php

### Locally with development server

    php -S localhost:8000 benchmark.php
    
### Remotely
Install on the server by running composer and visiting the `/benchmark.php` page of the directory the project is installed at.

## Contribution
I'm open to improvements and new benchmarks via [pull requests](https://github.com/hyperized/benchmark/pulls)

Issues can be reported through [Issues](https://github.com/hyperized/benchmark/issues).
Please include the full output of the script and your config file without the password.

## Credit
Credit where credit is due:

- https://github.com/odan/benchmark-php
- https://gist.github.com/RamadhanAmizudin/ca87f7be83c6237bb070
- https://stackoverflow.com/a/25370978/1757763
- http://php.net/manual/en/function.rmdir.php#119949
