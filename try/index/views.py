# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.shortcuts import redirect, render
from django.urls import reverse
from django.views import View
from .models import *
from .forms_ga import *

class index(View):
    def get(self,request,url=""):
        cirugiasquery = Cirugias.objects.all()
        serviciosquery = Servicios.objects.all()
        equiposquery = Equipo.objects.all()
        padquery = Padecimientos.objects.all()
        caruselquery = Carrusel.objects.all()
        cform = contactoForm()
        return render(request,"index/index.html",{'cirugiasquery':cirugiasquery,
            'serviciosquery':serviciosquery,
            'equipoquery':equiposquery,
            'padquery':padquery,
            'caruselquery':caruselquery,
            'url':url,
            'cform':cform
        })

class cirugias_blog(View):
    def get(self,request,url):
        cirugia = Cirugias.objects.all().filter(url=url)
        cirugiasquery = Cirugias.objects.all()
        padquery = Padecimientos.objects.all()
        dinamicurl="cirugias"
        title_carousel = "¡Conoce más sobre nuestras cirugías!"
        return render(request,"index/article.html",{'cirugia':cirugia[0],'cirugiasquery':cirugiasquery, 'padquery':padquery,
        'dinamicurl':dinamicurl,'tc':title_carousel,})
#class index2(View):
#    def get()

class pad_blog(View):
    def get(self,request,url):
        cirugia = Padecimientos.objects.all().filter(url=url)
        cirugiasquery = Cirugias.objects.all()
        padquery = Padecimientos.objects.all()
        dinamicurl="padecimientos"
        title_carousel = "Conoce más sobre Padecimientos"
        return render(request,"index/article.html",{'cirugia':cirugia[0],'cirugiasquery':cirugiasquery, 'padquery':padquery,
        'dinamicurl':dinamicurl,'tc':title_carousel,})

def redirects(request,url):
    cirugia = Cirugias.objects.all().filter(url=url)
    pad = Padecimientos.objects.all().filter(url=url)
    if (pad and not cirugia):
        return redirect(reverse("pad_bg",args=[str(url)]))
    elif (cirugia and not pad):
        return redirect(reverse("cirugias_bg",args=[str(url)]))
    #if (cirugia != None):
    #    return redirect("cirugias/"+str(url))



