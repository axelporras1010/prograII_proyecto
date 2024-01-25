<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create roles if they don't exist, using only the name as the first argument
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        if (!Role::where('name', 'student')->exists()) {
            Role::create(['name' => 'student']);
        }

        // Correctly find roles by name, passing only the string name
        $role = Role::findByName('admin');  // Pass only 'admin'
        $role2 = Role::findByName('student'); // Pass only 'student'

        $user = User::find(1);
        $user->assignRole($role);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};