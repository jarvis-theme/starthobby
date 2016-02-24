<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body>
        <div class="container">
            {{ Theme::partial('header') }} 
            {{ Theme::partial('slider') }} 
            <div class="row">
                <div id="content">
                    {{ Theme::place('content') }} 
                    {{ Theme::partial('footer') }} 
                </div>
            </div>
        </div>

        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
    </body>
</html>