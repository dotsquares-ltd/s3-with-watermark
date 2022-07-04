# AWS S3 with Watermark Laravel

This package helps to storage images with water mark



## Requirements

This package requires Laravel 9

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Laravel project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

       composer require jugalkishoredots/s3-with-watermark

2. Then use this namespace in your controller:

       use Dotsquares\S3WithWatermark\S3WithWatermarkController;


## Environment Variables

#### AWS Environment Variables
The package makes use of the existing AWS/S3 configuration within Laravel, so if you've already configured your app to use S3, you are good to go! Of course, provided you are using the most recent AWS/S3 config statements (these were changed not too long ago in Laravel). To make sure, check your `.env` file for the following:

```
AWS_ACCESS_KEY_ID=<YOUR KEY>
AWS_SECRET_ACCESS_KEY=<YOUR SECRET>
AWS_DEFAULT_REGION=<DEFAULT REGION>
AWS_BUCKET=<YOUR BUCKET NAME>
```

If you aren't sure what value to use in `AWS_DEFAULT_REGION`, [check this page](https://docs.aws.amazon.com/general/latest/gr/rande.html) for more information (use the value shown in the `Region` column in the table on that page.