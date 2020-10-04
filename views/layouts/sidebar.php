<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">

        <span class="brand-text font-weight-light">KLINIK MITRA HUSADA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

        <?php
        echo \hail812\adminlte3\widgets\Menu::widget([
            'items' => [
                ['label' => 'Yii2 PROVIDED', 'header' => true],
                ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                ['label' => 'Level1'],
                [
                    'label' => 'Level1',
                    'items' => [
                        ['label' => 'Level2', 'iconStyle' => 'far'],
                        [
                            'label' => 'Level2',
                            'iconStyle' => 'far',
                            'items' => [
                                ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                            ]
                        ],
                        ['label' => 'Level2', 'iconStyle' => 'far']
                    ]
                ],
                ['label' => 'Level1'],
                ['label' => 'LABELS', 'header' => true],
                ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
            ],
        ]);
        ?>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>