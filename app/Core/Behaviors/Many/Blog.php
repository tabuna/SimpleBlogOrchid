<?php

namespace App\Core\Behaviors\Many;

use Orchid\Platform\Behaviors\Many;
use Orchid\Platform\Http\Forms\Posts\BasePostForm;
use Orchid\Platform\Http\Forms\Posts\UploadPostForm;

class Blog extends Many
{
    /**
     * @var string
     */
    public $name = 'Записи блога';

    /**
     * @var string
     */
    public $description = 'Пример записей блога';

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
     */
    public function fields() : array
    {
        return [
            'name'        => [
                'tag'      => 'input',
                'type'     => 'text',
                'name'     => 'name',
                'max'      => 255,
                'required' => true,
                'title'    => 'Название статьи',
                'help'     => 'Как называется статья?',
            ],
            'body' => [
                'tag'      => 'wysiwyg',
                'name'     => 'body',
                'max'      => 255,
                'required' => true,
                'rows'     => 10,
            ],
            'title'       => 'tag:input|type:text|name:title|max:255|required|title:Залоголок страницы|help:Заголовок вкладки',
            'description' => 'tag:textarea|name:description|max:255|required|rows:5|title:Краткое описание',
            'keywords'    => 'tag:tags|name:keywords|max:255|required|title:Keywords|help:Ключевые слова',
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
            'name'       => 'Имя',
            'publish_at' => 'Дата публикации',
            'created_at' => 'Дата создания',
        ];
    }
}
