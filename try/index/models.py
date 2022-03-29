# -*- coding: utf-8 -*-
from __future__ import unicode_literals
from django.db import models

class Cirugias(models.Model):
    imagen = models.ImageField(upload_to="img")
    titulo = models.CharField(max_length=200)
    descripcion = models.CharField(max_length=600,default="Escribe un texto...")
    boton = models.CharField(max_length=20,default="Continua leyendo")
    articulo = models.TextField(default="Escribe un articulo...")
    url = models.SlugField(default="None")

    def __str__(self):
        return str(self.titulo)

class Servicios(models.Model):
    imagen = models.ImageField(upload_to="img")
    titulo = models.CharField(max_length=40)
    descripcion = models.TextField(default="Escribe un texto...")
    boton = models.CharField(max_length=40,default="Servicio")
    url = models.SlugField(default="None")

    def __str__(self):
        return str(self.titulo)

class Equipo(models.Model):
    imagen = models.ImageField(upload_to="img")
    titulo = models.CharField(max_length=40)
    descripcion = models.CharField(max_length=600,default="Escribe un texto...")
    articulo = models.TextField(default="Escribe un articulo...")
    url = models.SlugField(default="None")

    def __str__(self):
        return str(self.titulo)

class Padecimientos(models.Model):
    imagen = models.ImageField(upload_to="img")
    titulo = models.CharField(max_length=50)
    descripcion = models.CharField(max_length=600,default="Escribe un texto...")
    articulo = models.TextField(default="Escribe un articulo...")
    url = models.SlugField(default="None")

    def __str__(self):
        return str(self.titulo)

class Carrusel(models.Model):
    titulo = models.CharField(max_length=20,default="1")
    imagen = models.ImageField(upload_to="img")
    intervalo = models.IntegerField(default=5000)

    def __str__(self):
        return str(self.titulo)
