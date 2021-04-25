<nav class="d-flex justify-content-between" aria-label="Page navigation example">
    <div class="d-flex flex-column justify-content-center">{{$products->total()}} resultados</div>
    <ul class="pagination flex-row align-items-center justify-content-end">
        @if($products->onFirstPage())
            <li class="page-item disabled h-100">
                <span class="page-link h-100 d-flex flex-row align-items-center justify-content-between">
                    <i class="fas fa-angle-double-left mr-2"></i>
                    <div class="d-none d-md-block">Primeira</div>
                </span>
            </li>
            <li class="page-item disabled h-100">
                <span class="page-link h-100 d-flex flex-row align-items-center justify-content-between">
                    <i class="fas fa-angle-left mr-2"></i>
                    <div class="d-none d-md-block">Anterior</div>
                </span>
            </li>
        @else
            <li class="page-item h-100">
                <a class="page-link h-100 d-flex flex-row align-items-center justify-content-between" href="{{$products->url(1)}}">
                    <i class="fas fa-angle-double-left mr-2"></i>
                    <div class="d-none d-md-block">Primeira</div>
                </a>
            </li>
            <li class="page-item h-100">
                <a class="page-link h-100 d-flex flex-row align-items-center justify-content-between" href="{{$products->previousPageUrl()}}">
                    <i class="fas fa-angle-left mr-2"></i>
                    <div class="d-none d-md-block">Anterior</div>
                </a>
            </li>
        @endif
        <?php
            $start = $products->currentPage()-2;
            $end = $products->currentPage()+2;
        ?>
        @for($i = $start; $i <= $end; $i++)
            @if ($i > 0 && $i <= $products->lastPage())
                @if ($i == $products->currentPage())
                    <li class="page-item disabled"><span class="page-link">{{$i}}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{$products->url($i)}}">{{$i}}</a></li>
                @endif
            @endif
        @endfor
        @if($products->hasMorePages())
            <li class="page-item h-100">
                <a class="page-link h-100 d-flex flex-row align-items-center justify-content-between" href="{{$products->nextPageUrl()}}">
                    <div class="d-none d-md-block">Próxima</div>
                    <i class="fas fa-angle-right ml-2"></i>
                </a>
            </li>
            <li class="page-item h-100">
                <a class="page-link h-100 d-flex flex-row align-items-center justify-content-between" href="{{$products->url($products->lastPage())}}">
                    <div class="d-none d-md-block">Última</div>
                    <i class="fas fa-angle-double-right ml-2"></i>
                </a>
            </li>
        @else
            <li class="page-item disabled h-100">
                <span class="page-link h-100 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-none d-md-block">Próxima</div>
                    <i class="fas fa-angle-right ml-2"></i>
                </span>
            </li>
            <li class="page-item disabled h-100">
                <span class="page-link h-100 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-none d-md-block">Última</div>
                    <i class="fas fa-angle-double-right ml-2"></i>
                </span>
            </li>
        @endif
    </ul>
</nav>
