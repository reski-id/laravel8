<section class="resume-section" id="course">
    <div class="resume-section-content">
        <h2 class="mb-5">
            Courses/Bootcamp</h2>
        <ul class="fa-ul mb-0">
            @foreach ($course as $item)
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    <strong>{{$item->course}}</strong> from {{$item->lembaga}} at {{$item->finish_years}} <br>
                    <a href="{{$item->link_sertifikat}}" target="_blank" rel="noopener noreferrer">Certificate Link</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
