from django.db import models

class Cirugias(models.Model):
    imagen = models.ImageField(upload_to="img")
    titulo = models.CharField(max_length=25)
    descripción = models.CharField(max_length=60)
    boton = models.CharField(max_length=20,default="Continua leyendo")
    articulo = models.TextField()
