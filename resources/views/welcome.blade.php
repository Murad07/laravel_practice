<h1>Welcome page</h1>

<a href="/about"><h4>About</h4></a>
<a href="/contact"><h4>Contact</h4></a>

<h4>- Controller create command: php artisan make:controller user</h4>
<h4>- Create component command: php artisan make:component Header</h4>
<h6>- - Component create Two file one inside Views/components. and another inside app/View/Components</h6>
<h4>- middleware command: php artisan make:middleware ageCheck</h4>

<br><br>
<h5>Practice Date: 11/29/21</h5>
<h3>Migration Process</h3>
<li>- php artisan make:migration create_test_table</li>
<li>Run avobe command to create a database table daynamically. We will found the created file inside database folder.</li>
<li>Update the file with our table field</li>
<li>- php artisan migrate. run the command to crete the table on database.</li>

<br>
<h3>Migration Important Command:</h3>
<li>php artisan make:migration create_test5_table</li>
<li>php artisan migrate</li>
<li>php artisan migrate:reset  ###-This command remove the created table using migration.</li>
<li>php artisan migrate:rollback ###-This will remove the list migrated data. (multi time migration).</li>
<li>php artisan migrate:rollback --step 3 ###-This will remove the list 3 migrated data.</li>
<li>php artisan migrate --path=/database/migrations/2020_09_21_141958_create_test5_table.php ###-Migrate only this table.</li>
<li>php artisan migrate:refresh ###-This will update the migrated table suppos we change the table field.</li>

<br>
<h3>Seeding</h3>
<li>Adding dummy data to the database.</li>
<li>- php artisan make:seeder file_name ###-Make seeder file</li>
<li>get seeder file inside database/seeders folder. Then update it as your need, check TestDeeder.php</li>
<li>- php artisan db:seed --class=TestSeeder  ###-Run this command to seed the database table.</li>