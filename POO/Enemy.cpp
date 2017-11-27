#include "Enemy.h"

void Enemy::load(int x, int y, int width, int height, std::string textureID)
{
 GameObject::load(x, y, width, height, textureID);
}

void Enemy::update(std::string id)
{
    //time++;
 if (id=="enemy1" || id=="jefe")
    m_currentFrame = int(((SDL_GetTicks() / 100) % 12));
 if (id=="enemy2")
     m_currentFrame = int(((SDL_GetTicks() / 100) % 20));
 if (id=="enemy3")
       m_currentFrame = int(((SDL_GetTicks() / 100) % 24));
/* if(m_x > 0 && flag)
   m_x--;
else
    flag=0;
if(m_x<590 && !flag)
   m_x++;
else
    flag=1;*/
/*if(time==1000)
{
       e_bullet = new Bullets();
       e_bullet->load(m_x,m_y,5,15,"bala-enemiga");
       m_gameEnemiesBullets.push_back(e_bullet);
       for(int i = 0; i != m_gameEnemiesBullets.size(); i++)
                m_gameEnemiesBullets[i]->draw(m_pRenderer, m_texture);
       time=0;
}*/
}
