
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Галерея «Наши работы»', 'icon' => 'image', 'url' => ['/gallery']],
                    ['label' => 'Заявки', 'icon' => 'tasks', 'url' => ['/feedback']],
                ],
            ]
        ) ?>

    </section>

</aside>
