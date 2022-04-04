<?php

namespace App\Admin\Controllers;

use App\Models\Post;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('content', __('Content'));
        $grid->column('name', __('Name'));
        $grid->column('imgs', __('Imgs'))->display(function ($title) {
            return '<img src = "' . url('/') . '/uploads/' . $title . '" width="50" height="40">';
        });
        $grid->column('title', __('Title'));
        $grid->column('piority', __('Piority'));
        $grid->column('author_name', __('Author name'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('Imgs', __('Imgs'));
        $show->field('piority', __('Piority'));
        $show->field('author_name', __('Author name'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->text('name', __('Name'));
        $form->text('title', __('Title'));
        $form->text('content', __('Content'));
        $form->image('imgs', __('Imgs'))->move('/');
        $form->radio('piority', __('Piority'))->options(['High' => 'High', 'Medium' => 'Medium', 'Low' => 'Low']);
        // $form->text('author_name');
        $form->select('author_name', __('Author name'))->options(['Thong' => 'Thong', 'Thomas' => 'Thomas', 'Join' => 'Join', 'Tomy' => 'Tomy']);


        return $form;
    }
}
