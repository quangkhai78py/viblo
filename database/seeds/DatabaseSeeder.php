<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(EvaluatesTableSeeder::class);
        $this->call(FollowsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(Post_TagTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(Tag_SeriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(User_Organization::class);
        $this->call(ViewsTableSeeder::class);
    }
}
