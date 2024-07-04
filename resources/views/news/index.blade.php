<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-5">
                                {{ __('News') }}
                            </h2>
                        </header>
                        
                        @foreach($data as $news)
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$news->headline}}</h5>
                                <p class="card-text">{{$news->description}}</p>
                                <a href="{{  route('news.edit', $news) }}" class="card-link">Edit</a>
                                <form action="{{ route('news.destroy', $news) }}" method="POST">
                                    @csrf @method('delete')
                                    
                                    <a :href="{{  route('news.edit', $news) }}" class="btn btn-link" onclick="event.preventDefault(); this.closest('form').submit();">Delete</a>
                                </form>
                            </div>
                        </div>
                         @endforeach
                         <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>