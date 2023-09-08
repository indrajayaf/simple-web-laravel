<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Fahmy Indrajaya',
            'username' => 'indra',
            'email' => 'indrajaya.f@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Milan Yunidha',
        //     'email' => 'milanyunidha@gmail.com',
        //     'password' => bcrypt('1223123')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Economy',
            'slug' => 'economy'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerp' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, itaque.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae officiis dolor inventore dignissimos sunt quae, velit, eaque doloremque accusamus dicta ducimus cum fugiat alias iusto dolorum dolorem expedita quaerat id. </p><p>Distinctio nihil nam architecto eius mollitia qui, quaerat alias provident deserunt a, eveniet rem quasi dicta! Doloremque, reiciendis aut accusamus dolorum minima fugiat mollitia quo temporibus modi explicabo voluptate doloribus eius eaque ducimus incidunt libero quae obcaecati unde nisi beatae commodi praesentium consectetur nesciunt. Voluptatem similique sed, eum aperiam odit animi rerum cum a placeat nesciunt minus ipsam voluptate eveniet quam, distinctio est architecto aut consequuntur? Quaerat, voluptas eligendi?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerp' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, itaque.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae officiis dolor inventore dignissimos sunt quae, velit, eaque doloremque accusamus dicta ducimus cum fugiat alias iusto dolorum dolorem expedita quaerat id. </p><p>Distinctio nihil nam architecto eius mollitia qui, quaerat alias provident deserunt a, eveniet rem quasi dicta! Doloremque, reiciendis aut accusamus dolorum minima fugiat mollitia quo temporibus modi explicabo voluptate doloribus eius eaque ducimus incidunt libero quae obcaecati unde nisi beatae commodi praesentium consectetur nesciunt. Voluptatem similique sed, eum aperiam odit animi rerum cum a placeat nesciunt minus ipsam voluptate eveniet quam, distinctio est architecto aut consequuntur? Quaerat, voluptas eligendi?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerp' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, itaque.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae officiis dolor inventore dignissimos sunt quae, velit, eaque doloremque accusamus dicta ducimus cum fugiat alias iusto dolorum dolorem expedita quaerat id. </p><p>Distinctio nihil nam architecto eius mollitia qui, quaerat alias provident deserunt a, eveniet rem quasi dicta! Doloremque, reiciendis aut accusamus dolorum minima fugiat mollitia quo temporibus modi explicabo voluptate doloribus eius eaque ducimus incidunt libero quae obcaecati unde nisi beatae commodi praesentium consectetur nesciunt. Voluptatem similique sed, eum aperiam odit animi rerum cum a placeat nesciunt minus ipsam voluptate eveniet quam, distinctio est architecto aut consequuntur? Quaerat, voluptas eligendi?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerp' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, itaque.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates recusandae officiis dolor inventore dignissimos sunt quae, velit, eaque doloremque accusamus dicta ducimus cum fugiat alias iusto dolorum dolorem expedita quaerat id. </p><p>Distinctio nihil nam architecto eius mollitia qui, quaerat alias provident deserunt a, eveniet rem quasi dicta! Doloremque, reiciendis aut accusamus dolorum minima fugiat mollitia quo temporibus modi explicabo voluptate doloribus eius eaque ducimus incidunt libero quae obcaecati unde nisi beatae commodi praesentium consectetur nesciunt. Voluptatem similique sed, eum aperiam odit animi rerum cum a placeat nesciunt minus ipsam voluptate eveniet quam, distinctio est architecto aut consequuntur? Quaerat, voluptas eligendi?</p>'
        // ]);
    }
}
