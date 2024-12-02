@section('style')
<style>
    :root {
        --color-primary: #222;
        --color-primary-hover: #2f566d
    }

    html {
        scroll-behavior: smooth
    }

    body {
        font-family: Roboto Condensed, sans-serif
    }

    .hover-title {
        transition: all .3s ease
    }

    .hover-title:hover {
        color: var(--color-primary) !important
    }

    .pagination {
        justify-content: flex-end;
        padding: 20px 0
    }

    .pagination ul {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        padding-left: 0
    }

    .pagination__item {
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: inline-block;
        display: flex;
        height: 40px;
        justify-content: center;
        margin-right: 5px;
        text-align: center;
        width: 45px
    }

    @media (max-width:768px) {
        .pagination__item {
            margin-bottom: 5px
        }
    }

    .pagination__item:hover {
        background-color: var(--color-primary)
    }

    .pagination__item:hover .page-link {
        color: #fff
    }

    .pagination__item .page-link {
        background: transparent;
        border: none;
        color: #000;
        display: block;
        font-size: .9375rem;
        font-weight: 500
    }

    .pagination__item:last-child {
        margin-right: 0
    }

    .pagination__item.page-current {
        background-color: var(--color-primary)
    }

    .pagination__item.page-current .page-link {
        color: #fff
    }

    .pagination__item.disabled {
        border: none
    }

    .pagination__item.disabled .page-link {
        opacity: .5
    }

    .pagination__arrow {
        font-size: .625rem
    }

    .pagination__arrow a {
        color: #000
    }

    .pagination__arrow:hover a {
        color: #fff
    }

    .text-one-row {
        -webkit-line-clamp: 1;
        line-clamp: 1
    }

    .text-one-row,
    .text-two-row {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden
    }

    .text-two-row {
        -webkit-line-clamp: 2;
        line-clamp: 2
    }

    .choose-paginate .dropdown-menu.show {
        align-items: center;
        display: flex;
        padding: 10px
    }

    .dark-theme .fa-fire-flame-curved {
        color: #fff
    }

    .dark-theme .header-bottom {
        background-color: #393333 !important
    }

    .dark-theme .header-bottom p {
        color: #fff !important
    }

    .dark-theme main {
        background-color: #514f4f !important
    }

    .dark-theme .author-name,
    .dark-theme .category-name,
    .dark-theme .story-name,
    .dark-theme .title-head-name {
        color: #fff !important
    }

    .dark-theme .card-custom {
        background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important
    }

    .dark-theme .card-custom a,
    .dark-theme .card-custom p,
    .dark-theme .card-custom span,
    .dark-theme .fa-solid.fa-angle-right {
        color: #fff !important
    }

    .dark-theme .footer {
        background-color: #393333 !important
    }

    .dark-theme .footer a,
    .dark-theme .footer div,
    .dark-theme .footer p,
    .dark-theme .footer span,
    .dark-theme .footer strong {
        color: #fff !important
    }

    .dark-theme .footer .list-tag a {
        color: #393333 !important
    }

    .dark-theme select.form-select {
        --bs-text-opacity: 1;
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
        color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important
    }

    .dark-theme .hover-title:hover {
        color: #ff7f7f !important
    }

    .dark-theme .story-detail,
    .dark-theme .story-detail a {
        color: #fff !important
    }

    .dark-theme .story-detail .info-more .info-more--more {
        background: linear-gradient(180deg, rgba(61, 60, 60, 0), rgba(61, 60, 60, .7) 21.88%, rgba(61, 60, 60, .95) 45.31%, #222 67.71%, #222)
    }

    .dark-theme .story-detail .info-more a,
    .dark-theme .story-detail .info-more span {
        color: #fff !important
    }

    .dark-theme .story-detail .info-more path,
    .dark-theme .story-detail .info-more svg {
        fill: #fff
    }

    .dark-theme .top-ratings a,
    .dark-theme .top-ratings span {
        color: #fff !important
    }

    .dark-theme .top-ratings__tab .list-group-item {
        background-color: #222
    }

    .dark-theme .top-ratings__tab .list-group-item.active {
        background-color: #393333 !important
    }

    .dark-theme .top-ratings__content .rating-item__number span {
        color: #000 !important
    }

    .dark-theme .chapter-wrapper .chapter-content,
    .dark-theme .chapter-wrapper p {
        color: #fff !important
    }

    .dark-theme .chapter-actions ul {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important
    }

    .dark-theme .skeleton:empty:after {
        background-image: linear-gradient(90deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, .6), hsla(0, 0%, 100%, 0)), linear-gradient(#393333 var(--picture-height), transparent 0), linear-gradient(#645f5f var(--title-height), transparent 0), var(--author-skeleton), var(--rating-skeleton), var(--type-skeleton), linear-gradient(#645f5f var(--item-height), transparent 0)
    }

    .dark-theme .story-item-no-image svg {
        fill: #fff
    }

    main {
        background: #e1e1e1;
        padding: 30px 0
    }

    @media (max-width:768px) {
        main {
            padding: 20px 0
        }
    }

    :root {
        --item-width: 210px;
        --item-height: 390px;
        --item-padding: 20px;
        --item-skeleton: linear-gradient(#fff var(--item-height), transparent 0);
        --picture-height: 175px;
        --picture-width: 120px;
        --picture-position: center var(--item-padding);
        --picture-skeleton: linear-gradient(#eee var(--picture-height), transparent 0);
        --title-height: 15px;
        --title-width: 85%;
        --title-position: center calc(var(--picture-height) + var(--title-height) + 15px);
        --title-skeleton: linear-gradient(#eee var(--title-height), transparent 0);
        --author-height: 15px;
        --author-width: 70%;
        --author-position: center calc(var(--picture-height) + var(--title-height) + var(--author-height) + 30px);
        --author-skeleton: linear-gradient(#eee var(--title-height), transparent 0);
        --rating-height: 15px;
        --rating-width: 50%;
        --rating-position: center calc(var(--picture-height) + var(--title-height) + var(--author-height) + var(--rating-height) + 45px);
        --rating-skeleton: linear-gradient(#eee var(--title-height), transparent 0);
        --type-height: 15px;
        --type-width: 30%;
        --type-position: center calc(var(--picture-height) + var(--title-height) + var(--author-height) + var(--rating-height) + var(--type-height) + 60px);
        --type-skeleton: linear-gradient(#eee var(--title-height), transparent 0);
        --price-height: 15px;
        --price-width: 40%;
        --price-position: center calc(var(--picture-height) + var(--title-height) + var(--author-height) + var(--rating-height) + var(--type-height) + var(--price-height) + 75px);
        --price-skeleton: linear-gradient(#eee var(--title-height), transparent 0);
        --blur-width: 150px;
        --blur-size: var(--blur-width) var(--item-height)
    }

    .skeleton {
        height: var(--item-height);
        width: var(--item-width)
    }

    .skeleton:empty:after {
        animation: loading 1.5s infinite;
        background-image: linear-gradient(90deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, .6), hsla(0, 0%, 100%, 0)), var(--picture-skeleton), var(--title-skeleton), var(--author-skeleton), var(--rating-skeleton), var(--type-skeleton), var(--price-skeleton), var(--item-skeleton);
        background-position: -150% 0, var(--picture-position), var(--title-position), var(--author-position), var(--rating-position), var(--type-position), var(--price-position), 0 0;
        background-repeat: no-repeat;
        background-size: var(--blur-size), var(--picture-width) var(--picture-height), var(--title-width) var(--title-height), var(--author-width) var(--author-height), var(--rating-width) var(--rating-height), var(--type-width) var(--type-height), var(--price-width) var(--price-height), 100% 100%;
        content: "";
        display: block;
        height: 100%;
        width: 100%
    }

    @keyframes loading {
        to {
            background-position: 350% 0, var(--picture-position), var(--title-position), var(--author-position), var(--rating-position), var(--type-position), var(--price-position), 0 0
        }
    }

    .theme_mode:checked {
        background-color: var(--bs-pink);
        border-color: var(--bs-pink)
    }

    .section-stories-follow-chapter-count__list {
        -moz-column-gap: 15px;
        column-gap: 15px;
        display: grid;
        row-gap: 15px
    }

    @media (max-width:575px) {
        .section-stories-follow-chapter-count__list {
            grid-template-columns: repeat(3, 1fr)
        }
    }

    @media (min-width:576px) {
        .section-stories-follow-chapter-count__list {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media (min-width:768px) {
        .section-stories-follow-chapter-count__list {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media (min-width:992px) {
        .section-stories-follow-chapter-count__list {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media (min-width:1200px) {
        .section-stories-follow-chapter-count__list {
            grid-template-columns: repeat(6, 1fr)
        }
    }

    .loading-full {
        align-items: center;
        background: rgba(0, 0, 0, .3);
        display: none;
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999
    }

    .loading-full_icon,
    .loading-full_progress {
        margin: 0 auto;
        text-align: center
    }

    .loading-full_progress {
        background: #fff;
        padding: 15px 20px 20px;
        width: 80%
    }

    @media (max-width:992px) {
        .header .navbar-collapse {
            padding-bottom: 15px
        }
    }

    .header__navbar {
        background-color: var(--color-primary)
    }

    @media (max-width:992px) {
        .header__navbar {
            padding: 8px 0 !important
        }
    }

    .header__navbar .nav-item {
        margin-right: 16px
    }

    .header__navbar .nav-link {
        color: #fff
    }

    @media (min-width:768px) {
        .header__navbar .nav-link {
            padding: 15px 0
        }

        .header__navbar .nav-link.show {
            background-color: var(--color-primary-hover)
        }
    }

    .header__form-search {
        position: relative
    }

    .header__form-search button[type=submit] {
        position: absolute;
        right: 0
    }

    .header__form-search .search-result {
        max-height: 500px;
        overflow-y: auto;
        position: absolute;
        right: 0;
        top: 100%;
        width: 300px;
        z-index: 1021
    }

    @media (max-width:992px) {
        .header__form-search .search-result {
            width: 100%
        }
    }

    .header__form-search .search-result a {
        text-decoration: none
    }

    .header__form-search .no-result.search-result .card-body {
        padding: 15px !important
    }

    .header__form-search .no-result.search-result .card-body .spinner-border {
        margin: auto
    }

    .header-mobile {
        position: sticky;
        transition: all .3s linear;
        z-index: 9999
    }

    .header-mobile.hide-scroll {
        top: -64px
    }

    .header-mobile.show-scroll {
        box-sizing: border-box;
        top: 0;
        width: 100%
    }

    .header-bottom {
        box-shadow: 0 0 6px rgba(0, 0, 0, .3)
    }

    .dropdown-menu-custom.show {
        display: grid;
        grid-template-columns: auto auto
    }

    .settings-theme {
        width: 300px
    }

    @media (max-width:992px) {
        .settings-theme {
            width: unset
        }
    }

    .section-list-category .list-category {
        -moz-column-gap: 8px;
        column-gap: 8px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        list-style: none;
        row-gap: 8px
    }

    .section-stories-full__list {
        -moz-column-gap: 15px;
        column-gap: 15px;
        display: grid;
        row-gap: 15px
    }

    @media (max-width:575px) {
        .section-stories-full__list {
            grid-template-columns: repeat(3, 1fr)
        }
    }

    @media (max-width:460px) {
        .section-stories-full__list {
            grid-template-columns: repeat(2, 1fr)
        }
    }

    @media (min-width:576px) {
        .section-stories-full__list {
            grid-template-columns: repeat(3, 1fr)
        }
    }

    @media (min-width:768px) {
        .section-stories-full__list {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media (min-width:992px) {
        .section-stories-full__list {
            grid-template-columns: repeat(6, 1fr)
        }
    }

    @media (min-width:1200px) {
        .section-stories-full__list {
            grid-template-columns: repeat(8, 1fr)
        }
    }

    .section-stories-hot__list {
        -moz-column-gap: 15px;
        column-gap: 15px;
        display: grid;
        row-gap: 15px
    }

    @media (max-width:575px) {
        .section-stories-hot__list {
            grid-template-columns: repeat(3, 1fr)
        }
    }

    @media (min-width:576px) {
        .section-stories-hot__list {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media (min-width:768px) {
        .section-stories-hot__list {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media (min-width:992px) {
        .section-stories-hot__list {
            grid-template-columns: repeat(6, 1fr)
        }
    }

    @media (min-width:1200px) {
        .section-stories-hot__list {
            grid-template-columns: repeat(8, 1fr)
        }
    }

    .story-item-full {
        max-width: 150px;
        position: relative
    }

    @media (max-width:460px) {
        .story-item-full {
            max-width: unset
        }
    }

    .story-item-full__image {
        height: 100%;
        max-height: 220px;
        overflow: hidden
    }

    .story-item-full__image:hover img {
        transform: scale(1.1)
    }

    .story-item-full__image img {
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        transition: all .3s ease
    }

    .story-item-full__badge {
        left: 5px;
        position: absolute;
        top: 5px
    }

    .story-item-full__name {
        background-color: rgba(0, 0, 0, .6);
        bottom: 0;
        display: block;
        margin: 2px 0 0;
        padding: 5px;
        position: absolute;
        text-align: center;
        text-shadow: 1px 2px 2px #000;
        width: 100%
    }

    .story-item-full__name a {
        color: #f4f4f4;
        font-size: .75rem
    }

    .story-item-list__image {
        max-width: 100px
    }

    .story-item-list__chapter {
        position: absolute;
        right: 0
    }

    @media (max-width:992px) {
        .story-item-list__chapter {
            position: unset
        }
    }

    .story-item-no-image {
        align-items: center;
        border-bottom: 1px dashed #ccc;
        display: flex
    }

    .story-item-no-image:last-child {
        border-bottom: 0
    }

    .story-item-no-image__name {
        border-right: 1px dashed #ccc;
        padding: 10px 0;
        width: 50%
    }

    .story-item-no-image__name i {
        font-size: 20px
    }

    @media (max-width:992px) {
        .story-item-no-image__name {
            width: 70%
        }
    }

    .story-item-no-image__categories {
        border-right: 1px dashed #ccc;
        padding: 10px 0;
        width: 35%
    }

    .story-item-no-image__chapters {
        padding: 10px 0;
        width: 15%
    }

    @media (max-width:992px) {
        .story-item-no-image__chapters {
            width: 30%
        }
    }

    .story-item-no-image__updated-at {
        padding: 10px 0;
        width: 15%
    }

    .story-item {
        max-width: 150px
    }

    .story-item:hover img {
        transform: scale(1.1)
    }

    .story-item a {
        height: 100%;
        position: relative
    }

    .story-item__image {
        height: 100%;
        overflow: hidden
    }

    .story-item__image img {
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        transition: all .3s ease;
        width: 100%
    }

    .story-item__name {
        background-color: rgba(0, 0, 0, .6);
        bottom: 0;
        color: #f4f4f4;
        display: block;
        font-size: .75rem;
        font-weight: 600;
        margin: 2px 0 0;
        padding: 5px;
        position: absolute;
        text-align: center;
        text-shadow: 1px 2px 2px #000;
        width: 100%
    }

    .story-item .list-badge {
        display: flex;
        flex-direction: column;
        left: 5px;
        position: absolute;
        top: 5px
    }

    .story-item .list-badge .badge {
        margin-bottom: 5px
    }

    .story-item .list-badge .badge:last-child {
        margin-bottom: 0
    }

    @media (max-width:992px) {
        .chapter-content {
            font-size: 1.25rem
        }
    }

    .chapter-content p {
        margin-bottom: 10px
    }

    .chapter-actions-mobile {
        background: var(--color-primary);
        bottom: -150px;
        padding: 7px 0;
        position: fixed;
        transition: all .3s ease;
        width: 100%
    }

    @media (min-width:992px) {
        .chapter-actions-mobile {
            display: none !important
        }
    }

    .chapter-actions-mobile.show {
        bottom: 0
    }

    .chapter-actions .dropdown-menu.show,
    .chapter-actions-mobile .dropdown-menu.show {
        max-height: 300px;
        overflow-y: scroll
    }

    .story-detail__top--image {
        position: sticky;
        top: 10px
    }

    .story-detail__top--image .book-3d {
        box-shadow: 5px 5px 20px #333
    }

    @media (min-width:992px) {
        .story-detail__top--image .book-3d {
            margin: 0;
            outline: 1px solid transparent;
            -moz-perspective: 300px;
            position: relative;
            transform: perspective(300px) rotateY(-3deg);
            -moz-transform: rotateY(-3deg);
            -webkit-transform: perspective(300) rotateY(-3deg);
            z-index: 1
        }
    }

    @media (max-width:992px) {
        .story-detail__top--image .book-3d {
            margin: 0 auto 15px;
            width: 70%
        }
    }

    @media (min-width:992px) {
        .story-detail__top--image .book-3d:before {
            background-color: #000;
            left: 7%;
            width: 100%
        }

        .story-detail__top--image .book-3d:after,
        .story-detail__top--image .book-3d:before {
            content: " ";
            height: 97%;
            position: absolute;
            top: 2px;
            z-index: -1
        }

        .story-detail__top--image .book-3d:after {
            background-color: #efefef;
            box-shadow: inset 0 0 5px #aaa;
            left: 100%;
            transform: perspective(300px) rotateY(20deg);
            -moz-transform: rotateY(20deg);
            -webkit-transform: perspective(300) rotateY(20deg);
            width: 4%
        }
    }

    .story-detail__top--image .book-3d img {
        ertical-align: middle;
        max-width: 100%
    }

    @media (min-width:992px) {
        .story-detail__top--image .book-3d img {
            border: 1px solid #000;
            border-left-width: 5px;
            height: auto;
            position: relative;
            z-index: 1
        }
    }

    @media (max-width:992px) {
        .story-detail__top--image {
            position: unset;
            top: unset
        }
    }

    .story-detail__top--desc {
        max-height: 300px;
        overflow: hidden
    }

    .story-detail__top--desc.show-full {
        max-height: none !important
    }

    .story-detail__bottom--info {
        font-size: .875rem
    }

    @media (max-width:576px) {
        .story-detail__list-chapter--list__item ul {
            margin-bottom: 0
        }
    }

    .story-detail .rate-story {
        align-items: center;
        display: flex;
        flex-direction: column
    }

    .info-more {
        position: relative
    }

    .info-more a {
        align-items: center;
        cursor: pointer;
        display: none;
        justify-content: center
    }

    .info-more a span {
        color: #2c2c37;
        margin-right: 13px
    }

    .info-more a.active {
        display: flex
    }

    .info-more div {
        display: none
    }

    .info-more--more {
        align-items: center;
        background: linear-gradient(180deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, .7) 21.88%, hsla(0, 0%, 100%, .95) 45.31%, #fff 67.71%, #fff);
        bottom: 0;
        cursor: pointer;
        display: flex;
        height: 50px;
        justify-content: center;
        position: absolute;
        scroll-margin-top: 100px;
        width: 100%
    }

    .info-more--more.active {
        display: flex
    }

    .top-ratings__tab .list-group-item.active {
        background-color: var(--color-primary);
        border-color: var(--color-primary)
    }

    .top-ratings__content ul {
        list-style: none;
        padding-left: 0
    }

    .top-ratings__content .rating-item {
        border-bottom: 1px dashed #ccc;
        padding-bottom: 5px
    }

    .top-ratings__content .rating-item:last-child {
        border-bottom: 0
    }

    .top-ratings__content .rating-item__number {
        align-items: center;
        display: flex;
        height: 30px;
        justify-content: center;
        margin-right: 10px;
        max-width: 30px;
        width: 100%
    }

    .top-ratings__content .rating-item__number span {
        font-size: .875rem;
        font-weight: 600;
        margin-top: 2px
    }

    .top-ratings__content .rating-item__story--name {
        color: var(--color-primary);
        font-weight: 600
    }

    .top-ratings__content .rating-item__story--categories {
        font-size: .875rem
    }


    .story-item {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        /* Đảm bảo khung sản phẩm đồng đều */
    }

    .story-item:hover {
        transform: scale(1.05);
        /* Hiệu ứng phóng to khi rê chuột */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .story-item__image img {
        width: 100%;
        height: auto;
        object-fit: cover;
        /* Giữ tỷ lệ ảnh */
        max-height: 300px;
        /* Tăng chiều cao ảnh */
        border-radius: 5px;
    }

    .text-truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 1rem;
    }

    .list-badge span {
        margin-right: 5px;
    }
</style>
@endsection