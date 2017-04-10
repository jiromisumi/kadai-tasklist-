<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-sm-8 col-md-offset-3 col-sm-6">        
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">MessageBoard</a>
                    </div>
            
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>{!! link_to_route('tasks.create', '新規タスク') !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
