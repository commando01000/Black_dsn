@if ($paginator->hasPages())
    <div class="dsn-pagination p-relative d-flex align-items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" style="display: none;">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title">@lang('pagination.previous')</span>
            </span>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                aria-label="@lang('pagination.previous')">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title">@lang('pagination.previous')</span>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers disabled" aria-disabled="true">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers current" aria-current="page">
                            <span class="dsn-numbers dsn-heading-title title-tag">
                                <span class="number">{{ $page }}</span>
                            </span>
                        </span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">
                            <span class="dsn-numbers dsn-heading-title title-tag">
                                <span class="number">{{ $page }}</span>
                            </span>
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next"
                aria-label="@lang('pagination.next')">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title">@lang('pagination.next')</span>
            </a>
        @else
            <span class="page-numbers disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <svg viewbox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#fff">
                    <path
                        d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                    </path>
                </svg>
                <span class="sm-title-block dsn-heading-title">@lang('pagination.next')</span>
            </span>
        @endif
    </div>
@endif
