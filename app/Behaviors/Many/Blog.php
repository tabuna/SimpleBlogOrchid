<?php

namespace App\Behaviors\Many;

use Orchid\Platform\Behaviors\Many;
use Orchid\Platform\Fields\Field;
use Orchid\Platform\Http\Forms\Posts\BasePostForm;
use Orchid\Platform\Http\Forms\Posts\UploadPostForm;
use Orchid\Platform\Platform\Fields\TD;

class Blog extends Many
{
    /**
     * @var string
     */
    public $name = 'Blog';

    /**
     * @var string
     */
    public $description = 'Blog description';

    /**
     * @var string
     */
    public $slug = 'blog';

    /**
     * Slug url /news/{name}.
     *
     * @var string
     */
    public $slugFields = 'name';

    /**
     * Rules Validation.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'id'             => 'sometimes|integer|unique:posts',
            'content.*.name' => 'required|string',
            'content.*.body' => 'required|string',
        ];
    }

    /**
     * @return array
     * @throws \Orchid\Platform\Exceptions\TypeException
     */
    public function fields() : array
    {
        return [
            Field::tag('input')
                ->type('text')
                ->name('name')
                ->max(255)
                ->required()
                ->title('Название статьи')
                ->help('Как называется статья?'),

            Field::tag('wysiwyg')
                ->name('body')
                ->required()
                ->rows(10),

            Field::tag('input')
                ->type('text')
                ->name('title')
                ->max(255)
                ->required()
                ->title('Залоголок страницы')
                ->help('Заголовок вкладки'),

            Field::tag('textarea')
                ->name('description')
                ->rows(5)
                ->required()
                ->title('Краткое описание'),

            Field::tag('tags')
                ->name('keywords')
                ->title('Ключевые слова'),
        ];
    }

    /**
     * @return array
     */
    public function modules() : array
    {
        return [
            BasePostForm::class,
            UploadPostForm::class,
        ];
    }

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [
            TD::name('name')->title('Имя'),
            TD::name('publish_at')->title('Дата публикации'),
            TD::name('created_at')->title('Дата создания'),
        ];
    }
}
