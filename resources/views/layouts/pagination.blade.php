@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        @if ($paginator->onFirstPage())
            <li class="inline border-0 border-brand-light px-3 py-2 no-underline disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">
                    <span class="d-none d-md-block">&lsaquo;</span>
                    <span class="d-block d-md-none">@lang('pagination.previous')</span>
                </span>
            </li>
        @else
            <li class="inline border-0 border-brand-light px-3 py-2 no-underline">
                <button type="button" class="page-link" wire:click="previousPage" rel="prev" aria-label="@lang('pagination.previous')">
                    <span class="d-none d-md-block">&lsaquo;</span>
                    <span class="d-block d-md-none">@lang('pagination.previous')</span>
                </button>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="inline border-0 border-brand-light px-3 py-2 no-underline disabled d-none d-md-block" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="text-green-500 inline border-0 border-brand-light px-3 py-2 no-underline active d-none d-md-block" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="inline border-0 border-brand-light px-3 py-2 no-underline d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="inline border-0 border-brand-light px-3 py-2 no-underline">
                <button type="button" class="page-link" wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">
                    <span class="d-block d-md-none">@lang('pagination.next')</span>
                    <span class="d-none d-md-block">&rsaquo;</span>
                </button>
            </li>
        @else
            <li class="inline border-0 border-brand-light px-3 py-2 no-underline disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="" aria-hidden="true">
                    <span class="d-block d-md-none">@lang('pagination.next')</span>
                    <span class="d-none d-md-block">&rsaquo;</span>
                </span>
            </li>
        @endif
    </ul>
@endif
