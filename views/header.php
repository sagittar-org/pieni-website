<?php $uri_string = uri('language') === config('uri')['language_list'][0] ? uri('uri_string') : preg_replace('#^'.uri('language').'/?#', '', uri('uri_string')); ?>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php href(''); ?>"><?php // l('actor_'.uri('actor')); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://github.com/sagittar-org/pieni">GitHub</a></li>
            <li><a href="https://packagist.org/packages/sagittar-org/pieni">Packagist</a></li>
            <li<?php if (uri('class') === 'docs'): ?> class="active"<?php endif; ?>><a href="<?php href('docs'); ?>"><?php l('docs'); ?></a></li>
            <li<?php if (uri('class') === 'post'): ?> class="active"<?php endif; ?>><a href="<?php href('post'); ?>"><?php l('post'); ?></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.facebook.com/kentasaito1977">Facebook</a></li>
            <li<?php if (uri('class') === 'inquiry'): ?> class="active"<?php endif; ?>><a href="<?php href('inquiry'); ?>"><?php l('inquiry'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Language <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li<?php if (uri('language') === 'en'): ?> class="active"<?php endif; ?>><a href="<?php href($uri_string, FALSE, FALSE); ?>">English</a></li>
                <li<?php if (uri('language') === 'ja'): ?> class="active"<?php endif; ?>><a href="<?php href('ja/'.$uri_string, FALSE, FALSE); ?>">Japanese</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
