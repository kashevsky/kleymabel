<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use App\Models\Product;
use SleepingOwl\Admin\Section;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class Categories
 *
 * @property \App\Models\Category $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Categories extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Категории';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('id', '#')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('title', 'Заголовок')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
        ];

        $display = AdminDisplay::datatables()
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
            ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        $display->setColumnFilters([
            AdminColumnFilter::select()
                ->setModelForOptions(\App\Models\Category::class, 'name')
                ->setLoadOptionsQueryPreparer(function($element, $query) {
                    return $query;
                })
                ->setDisplay('name')
                ->setColumnName('name')
                ->setPlaceholder('All names')
            ,
        ]);
        $display->getColumnFilters()->setPlacement('card.heading');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        $form = AdminForm::card()->addBody([
            AdminFormElement::columns()->addColumn([
                AdminFormElement::html('Данные для СЕО'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::text('meta_title', 'Title'),
                AdminFormElement::text('slug','URL-адрес (НЕ МЕНЯТЬ)'),
                AdminFormElement::text('description', 'Описание'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('Элементы страницы'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<img src="/images/zagolovok.png" style="width:400px">'),
                AdminFormElement::text('title', 'Заголовок'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/kratk.png" style="width:400px">'),
                AdminFormElement::textarea('short_desc','Краткое описание'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/text.png" style="width:400px">'),
                AdminFormElement::wysiwyg('content', 'Текст'),
                AdminFormElement::html('<br>'),
                AdminFormElement::number('price', 'Цена'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/pre.png" style="width:400px">'),
                AdminFormElement::image('preview_image', 'Превью (отображение в каталоге)'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/osn.png" style="width:400px">'),
                AdminFormElement::image('main_image', 'Основное изображение'),
                AdminFormElement::html('<br>'),
                AdminFormElement::text('alt_main_image','Описание основного изображения (alt)'),
                AdminFormElement::text('alt_main_image','Заголовок основного изображения (title)'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/slid.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('Изображение для слайдера'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('images', [
                    AdminFormElement::html('<br>'),
                    AdminFormElement::image('image','Изображение слайдера'),
                    AdminFormElement::html('<br>'),
                    AdminFormElement::text('alt','Описание картинки'),
                    AdminFormElement::text('title','Заголовок картинки'),
                ]),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/eto_kleymo.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::checkbox('is_stamp','Это клеймо?'),
                AdminFormElement::html('<br>'),
                AdminFormElement::multiselect('products', 'Вложенные продукты', \App\Models\Product::class)->setDisplay('title'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<img src="/images/modif.png" style="width:400px">'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('Варианты использования (модификации)'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('options', [
                    AdminFormElement::html('<img src="/images/zg.png" style="width:400px">'),
                    AdminFormElement::text('h3','Заголовок'),
                    AdminFormElement::html('<img src="/images/tx.png" style="width:400px">'),
                    AdminFormElement::textarea('content','Текст'),
                    AdminFormElement::html('<img src="/images/iz.png" style="width:400px">'),
                    AdminFormElement::image('image','Изображение'),
                ]),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('Характеристики товара'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::hasMany('haracteristics', [
                    AdminFormElement::html('<img src="/images/prm.png" style="width:400px">'),
                    AdminFormElement::text('parameter','Параметр'),
                    AdminFormElement::html('<img src="/images/zn.png" style="width:400px">'),
                    AdminFormElement::text('value','Значение'),
                ]),
                AdminFormElement::html('<hr>'),
                AdminFormElement::file('video','Видеозапись'),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('Изображения для портфолио'),
                AdminFormElement::html('<br>'),
                AdminFormElement::html('<img src="/images/prtf.png" style="width:400px">'),
                AdminFormElement::hasMany('portfolio', [
                    AdminFormElement::image('image','Изображение для портфолио'),
                    AdminFormElement::text('alt','Alt'),
                    AdminFormElement::text('title','Title'),
                ]),
            ], 'col-xs-12 col-sm-6 col-md-4 col-lg-12')
        ]);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
            'save_and_create'  => new SaveAndCreate(),
            'cancel'  => (new Cancel()),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
