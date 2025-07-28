@php
    $fallbackImage = 'https://www.safetysign.co.id/image-upload/news-jasa-pembuatan-e-learning-457.jpg';
@endphp

<img src="{{ $src }}" 
     alt="{{ $alt ?? 'Image' }}" 
     class="{{ $class ?? '' }}"
     style="{{ $style ?? '' }}"
     onerror="this.onerror=null; this.src='{{ $fallbackImage }}'; this.style.borderRadius='8px'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'; this.style.transition='all 0.3s ease';"
     onload="this.style.borderRadius='8px'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'; this.style.transition='all 0.3s ease';"> 