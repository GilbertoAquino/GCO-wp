# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.shortcuts import redirect, render
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
        return render(request,"index/article.html",{'cirugia':cirugia[0],'cirugiasquery':cirugiasquery,})
#class index2(View):
#    def get()

def redirects(request,url):
    return redirect("../"+str(url))