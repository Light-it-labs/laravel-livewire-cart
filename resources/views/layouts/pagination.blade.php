@if ($paginator->lastPage() > 1)
    <ul >
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} inline border-t border-b border-l border-brand-light px-3 py-2 no-underline">
            <a href="{{ $paginator->url(1) }}"><<</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' text-green-500' : '' }} inline border-t border-b border-l border-brand-light px-3 py-2 no-underline">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} inline border-t border-b border-r border-l border-brand-light px-3 py-2 no-underline">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >>></a>
        </li>
    </ul>
@endif
