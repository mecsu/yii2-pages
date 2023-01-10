<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model mecsu\pages\models\Pages */



if (!empty($model->title))
    $this->title = $model->title;
else
    $this->title = $model->name;


if (!empty($model->description))
    $this->registerMetaTag(['content' => Html::encode($model->description), 'name' => 'description']);


if (!empty($model->keywords))
    $this->registerMetaTag(['content' => Html::encode($model->keywords), 'name' => 'keywords']);


if ($model->url)
    $this->registerLinkTag(['rel' => 'canonical', 'href' => $model->url]);
else
    $this->registerLinkTag(['rel' => 'canonical', 'href' => Url::canonical()]);


if ($model->in_amp && $model->url && class_exists('\wdmg\amp\Module')) {
    if (!($amp = Yii::$app->getModule('admin/amp')))
        $amp = Yii::$app->getModule('amp');

    if ($href = $amp->buildAmpPageUrl($model->url)) {
        $this->registerLinkTag([
            'rel' => "amphtml",
            'href' => $href,
        ]);
    }
}

?>

<!-- Start blog details section -->
<section class="blog__details--section section--padding">
    <div class="container">
        <div class="row">
                <div class="blog__details--wrapper">
                    <div class="entry__blog">
                        <div class="blog__post--header mb-30">
                            <h1 class="post__header--title mb-15"><?= Html::encode($model->title); ?></h1>                                 
                        </div>

                        <div class="blog__details--content">
                            <?= $model->content ?>
                            <!-- <p class="blog__details--content__desc mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita in recusandae sit officia ipsa, natus ad voluptatem doloribus dolorum placeat, rem deleniti est accusamus ipsum corporis voluptates soluta totam maiores nostrum reprehenderit quasi? Laboriosam itaque ab odit harum sed aut voluptates, illum unde. Saepe enim ad ut pariatur doloremque quas harum sequi, excepturi tempore exercitationem suscipit quam recusandae corrupti quibusdam. Laboriosam sapiente provident repellat blanditiis ratione nostrum illum asperiores quo cumque in quisquam, non iste aut illo vel, alias debitis!</p>
                            <p class="blog__details--content__desc mb-30"> Vel ipsa officiis nobis eveniet omnis consequuntur neque quasi, in, optio rerum suscipit totam odio. Alias necessitatibus nulla accusantium voluptatem ipsum voluptatum, vero in impedit nobis cupiditate ea, dicta eos facilis eaque optio laudantium non neque itaque? Possimus officia aut accusamus illum, adipisci, nihil numquam minus eum fugit, beatae minima facilis magni.</p>
                            <blockquote class="blockquote__content bg__gray--color mb-30">
                                <p class="blockquote__content--desc">Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                            </blockquote>
                            <p class="blog__details--content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus sapiente omnis sunt labore mollitia, quaerat incidunt sequi, ut alias accusamus nostrum magni fugit facilis dignissimos illum repellendus et numquam adipisci quos. Eos omnis maiores beatae cum a consequatur magnam sequi neque, at numquam qui ipsam unde veritatis voluptates quam dicta! Ipsam, mollitia illo fuga vel culpa reprehenderit quisquam maxime nesciunt. Sunt quaerat inventore aspernatur quibusdam corrupti numquam mollitia exercitationem rem alias consectetur hic iusto dignissimos nostrum odio, cumque impedit.</p> -->
                        </div>
                    </div>
                    <div class="related__post--area mb-50">
                        <div class="section__heading border-bottom mb-30">
                            <h2 class="section__heading--maintitle">Related <span>Articles</span></h2>
                        </div>
                        <div class="row row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n28">
                            <div class="col mb-28">
                                <div class="related__post--items">
                                    <div class="related__post--thumb border-radius-10 mb-20">
                                        <a class="display-block" href="blog-details.html"><img class="related__post--img display-block border-radius-10" src="/assets/img/blog/related-post1.webp" alt="related-post"></a>
                                    </div>
                                    <div class="related__post--text">
                                        <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="blog-details.html">Post With Gallery</a></h3>
                                        <span class="related__post--deta">February 14, 2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-28">
                                <div class="related__post--items">
                                    <div class="related__post--thumb border-radius-10 mb-20">
                                        <a class="display-block" href="blog-details.html"><img class="related__post--img display-block border-radius-10" src="/assets/img/blog/related-post2.webp" alt="related-post"></a>
                                    </div>
                                    <div class="related__post--text">
                                        <h3 class="related__post--title mb-10"><a class="related__post--title__link" href="blog-details.html">Post With Vedio</a></h3>
                                        <span class="related__post--deta">February 14, 2022</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="comment__box">
                        <div class="reviews__comment--area2 mb-50">
                            <h2 class="reviews__comment--reply__title style2 h3 mb-25">Recent Comment</h2>
                            <div class="reviews__comment--inner">
                                <div class="reviews__comment--list d-flex">
                                    <div class="reviews__comment--thumb">
                                        <img src="/assets/img/other/comment-thumb1.webp" alt="comment-thumb">
                                    </div>
                                    <div class="reviews__comment--content ">
                                        <div class="reviews__comment--top d-flex justify-content-between">
                                            <div class="reviews__comment--top__left">
                                                <h3 class="reviews__comment--content__title2 h4">Jakes on</h3>
                                                <span class="reviews__comment--content__date2">May 26, 2022</span>
                                            </div>
                                            <button class="comment__reply--btn primary__btn">Reply</button>
                                        </div>
                                        <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                    </div>
                                </div>
                                <div class="reviews__comment--list margin__left d-flex">
                                    <div class="reviews__comment--thumb">
                                        <img src="/assets/img/other/comment-thumb2.webp" alt="comment-thumb">
                                    </div>
                                    <div class="reviews__comment--content ">
                                        <div class="reviews__comment--top d-flex justify-content-between">
                                            <div class="reviews__comment--top__left">
                                                <h3 class="reviews__comment--content__title2 h4">Laura Johnson</h3>
                                                <span class="reviews__comment--content__date2">May 26, 2022</span>
                                            </div>
                                            <button class="comment__reply--btn primary__btn">Reply</button>
                                        </div>
                                        <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                    </div>
                                </div>
                                <div class="reviews__comment--list d-flex">
                                    <div class="reviews__comment--thumb">
                                        <img src="/assets/img/other/comment-thumb3.webp" alt="comment-thumb">
                                    </div>
                                    <div class="reviews__comment--content ">
                                        <div class="reviews__comment--top d-flex justify-content-between">
                                            <div class="reviews__comment--top__left">
                                                <h3 class="reviews__comment--content__title2 h4">Richard Smith</h3>
                                                <span class="reviews__comment--content__date2">May 26, 2022</span>
                                            </div>
                                            <button class="comment__reply--btn primary__btn">Reply</button>
                                        </div>
                                        <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews__comment--reply__area">
                            <form action="#">
                                <h3 class="reviews__comment--reply__title mb-20">Leave A Comment</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-20">
                                        <label>
                                            <input class="reviews__comment--reply__input" placeholder="Your Name...." type="text">
                                        </label>
                                    </div>  
                                    <div class="col-lg-4 col-md-6 mb-20">
                                        <label>
                                            <input class="reviews__comment--reply__input" placeholder="Your Email...." type="email">
                                        </label>
                                    </div> 
                                    <div class="col-lg-4 col-md-6 mb-20">
                                        <label>
                                            <input class="reviews__comment--reply__input" placeholder="Your Website...." type="text">
                                        </label>
                                    </div> 
                                    <div class="col-12 mb-15">
                                        <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...." ></textarea>
                                    </div> 
                                        
                                </div>
                                <button class="primary__btn" data-hover="Submit" type="submit">SUBMIT</button>
                            </form>   
                        </div> 
                    </div> 
                </div>
        </div>
    </div>
</section>