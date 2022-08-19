<section class="resume-section" id="projects">
    <div class="resume-section-content">
        <h2 class="mb-5">Finish Projects</h2>
        <ul class="fa-ul mb-0">
            @foreach ($porto as $item)
                <li>
                    <span class="fa-li"><i class="fas fa-suitcase text-warning"></i></span>
                    <strong>{{$item->proj_name}}</strong> {{$item->proj_kategory}} <br>
                    <a href="{{$item->proj_link}}" target="_blank" rel="noopener noreferrer">Project Link</a>
                </li>
            @endforeach
            {{-- {{$porto->links('pagination::bootstrap-4')}} --}}
        </ul>
    </div>
</section>
