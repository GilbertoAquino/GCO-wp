from django.urls import path
from .views import *
urlpatterns=[path("",index.as_view()),
             path("<str:url>",index.as_view())]