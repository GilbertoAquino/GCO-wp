# Generated by Django 4.0.2 on 2022-02-24 22:59

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('index', '0009_cirugias_url_equipo_url_padecimientos_url_and_more'),
    ]

    operations = [
        migrations.CreateModel(
            name='Carrusel',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo', models.CharField(default='1', max_length=20)),
                ('imagen', models.ImageField(upload_to='img')),
            ],
        ),
    ]