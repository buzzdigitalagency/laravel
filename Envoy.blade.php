@servers(['buzz' => 'lwcincr93@104.236.240.40'])

@task('full-deploy', ['on' => 'buzz'])
cd /var/www/master
git pull origin {{ isset($branch) ? $branch : 'master' }}
composer install
npm install
gulp --production
@endtask

@task('quick-deploy', ['on' => 'buzz'])
cd /var/www/master
git pull origin {{ isset($branch) ? $branch : 'master' }}
gulp --production
@endtask

@task('migrate', ['on' => 'buzz'])
cd /var/www/master
php artisan migrate
@endtask

@task('migrate-refresh', ['on' => 'buzz'])
cd /var/www/master
php artisan migrate:refresh
@endtask