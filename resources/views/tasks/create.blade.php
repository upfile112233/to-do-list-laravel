<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Material Design for Bootstrap</title>
        <!-- MDB icon -->
        <link rel="icon" href="/task-create/img/mdb-favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        />
        <!-- Google Fonts Roboto -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
        />
        <!-- MDB -->
        <link rel="stylesheet" href="/task-create/css/bootstrap-login-form.min.css" />
    </head>

    <body>
        <!-- Start your project here-->
        <style>
            .gradient-custom {
                /* fallback for old browsers */
                background: #6a11cb;

                /* Chrome 10-25, Safari 5.1-6 */
                background: -webkit-linear-gradient(
                    to right,
                    rgba(106, 17, 203, 1),
                    rgba(37, 117, 252, 1)
                );

                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                background: linear-gradient(
                    to right,
                    rgba(106, 17, 203, 1),
                    rgba(37, 117, 252, 1)
                );
            }
        </style>
        <form action="{{route('tasks.store')}}" method="post">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div
                    class="row d-flex justify-content-center align-items-center h-100"
                >
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div
                            class="card bg-dark text-white"
                            style="border-radius: 1rem"
                        >
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">
                                        New task
                                    </h2>
                                    <a href="{{route('tasks.index')}}" class="text-white-50 mb-5">Go back</a>
                                    @include('tasks.alert')
                                    <div class="form-outline form-white mb-4">
                                        <input
                                            type="text"
                                            id="title"
                                            name="title"
                                            class="form-control form-control-lg"
                                        />
                                        <label
                                            class="form-label"
                                            for="title"
                                            >Title</label
                                        >
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input
                                            type="date"
                                            id="due_date"
                                            name="due_date"
                                            class="form-control form-control-lg"
                                        />
                                        <label
                                            class="form-label"
                                            for="due_date"
                                            >Due_date</label
                                        >
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <textarea
                                            id="description"
                                            name="description"
                                            class="form-control form-control-lg"
                                        ></textarea>
                                        <label
                                            class="form-label"
                                            for="description"
                                        >Description</label>
                                    </div>

                                    <button
                                        class="btn btn-outline-light btn-lg px-5"
                                        type="submit"
                                    >
                                        Create
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @csrf
        </form>
        <!-- End your project here-->

        <!-- MDB -->
        <script type="text/javascript" src="/task-create/js/mdb.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>
    </body>
</html>
