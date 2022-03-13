<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('comments'); 
        $users = Comment::factory(10)->create();
        $this->enableForeignKeys();
    }
}
