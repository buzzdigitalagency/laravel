@servers(['buzz' => 'lwcincr93@104.236.240.40'])

@task('full-deploy', ['on' => 'buzz'])
cd /var/www/master
git pull origin {{ isset($branch) ? $branch : 'master' }}
composer install
npm install
gulp
@endtask

@task('quick-deploy', ['on' => 'buzz'])
cd /var/www/master
git pull origin {{ isset($branch) ? $branch : 'master' }}
gulp
@endtask