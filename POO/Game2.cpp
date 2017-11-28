#include "Game2.h"
#include "GameObject.h"
#include "TextureManager2.h"
#include <iostream>
#include <SDL.h>

bool Game::init(const char* title, int xpos, int ypos, int width, int height, int flags)
{if(SDL_Init(SDL_INIT_EVERYTHING) == 0)  // attempt to initialize SDL
 { std::cout << "SDL init success\n";    // init the window
   m_pWindow = SDL_CreateWindow(title, xpos, ypos, width, height, flags);
   if(m_pWindow != 0) // window init success
   {std::cout << "window creation success\n";
    m_pRenderer = SDL_CreateRenderer(m_pWindow, -1, 0);
    if(m_pRenderer != 0) // renderer init success
    { std::cout << "renderer creation success\n";
      SDL_SetRenderDrawColor(m_pRenderer,0,200,0,255);
//********** Cargando imágenes usando el método load del objeto TextureManager
      m_texture = new TextureManager();
      m_texture->load("assets/fondo.png", "background", m_pRenderer);
      m_texture->load("assets/ufo-unafila.png", "enemy1", m_pRenderer);
      m_texture->load("assets/MS-SpaceShip.png", "nave", m_pRenderer);
      m_texture->load("assets/bala-peque.png", "bala", m_pRenderer);
      m_texture->load("assets/bala-sinfondo-enemiga.png", "bala-enemiga", m_pRenderer);
      m_texture->load("assets/nave-alien.png", "enemy2", m_pRenderer);
      m_texture->load("assets/nave-grande.png", "enemy3", m_pRenderer);
      m_texture->load("assets/cerebro1.png", "jefe", m_pRenderer);

//********** Creando objetos Player y agregándolos al vector
      m_player = new Player();
      m_player->load(100, 100,60, 100, "nave");
      //m_gamePlayer.push_back(m_player);

      m_enemy = new Enemy();
      m_enemy->load(400, 200, 200, 200, "enemy2");
      m_gameEnemies.push_back(m_enemy);

      m_enemy = new Enemy();
      m_enemy->load(200, 200, 163, 100, "enemy3");
      m_gameEnemies.push_back(m_enemy);

      m_enemy = new Enemy();
      m_enemy->load(400, 100, 200, 180, "jefe");
      m_gameEnemies.push_back(m_enemy);

      m_enemy = new Enemy();
      m_enemy->load(300, 300, 56, 30, "enemy1");
      m_gameEnemies.push_back(m_enemy);
    }
    else
    {std::cout << "renderer init fail\n";
     return false; // renderer init fail
    }
   }
   else
   {std::cout << "window init fail\n";
    return false; // window init fail
   }
 }
 else
 {std::cout << "SDL init fail\n";
  return false; // SDL init fail
 }
 std::cout << "init success\n";
 m_bRunning = true; // everything inited successfully, start the main loop

 return true;
}

//Nuevo método render
void Game::render()
{
 SDL_RenderClear(m_pRenderer);

 m_texture->draw("background", 0, 0, 640, 480, m_pRenderer);

 m_player->draw(m_pRenderer,m_texture);

// m_gamePlayer[0]->draw(m_pRenderer,m_texture);
 // Recorre el método draw de los objetos en el vector
 for(int i = 0; i != m_gameEnemies.size(); i++)
 {
   m_gameEnemies[i]->draw(m_pRenderer, m_texture);
 }

 for(unsigned int i = 0; i != m_gameBullets.size(); i++)
  {
   m_gameBullets[i]->draw(m_pRenderer, m_texture);
  }

  for(unsigned int i = 0; i != m_gameEnemiesBullets.size(); i++)
  {
   m_gameEnemiesBullets[i]->draw(m_pRenderer, m_texture);
  }

 SDL_RenderPresent(m_pRenderer);
}

void Game::clean()
{
 std::cout << "cleaning game\n";
 SDL_DestroyWindow(m_pWindow);
 SDL_DestroyRenderer(m_pRenderer);
 SDL_Quit();
 m_bRunning = false;
}

void Game::handleEvents()
{
 const Uint8 *keys = NULL;
 SDL_Event event;

 keys=SDL_GetKeyboardState(NULL);

 if (SDL_PollEvent(&event))
  {switch (event.type)
   {case SDL_QUIT: m_bRunning = false; break;
    case SDL_KEYDOWN:
    {if (keys[SDL_SCANCODE_ESCAPE])
        std::cout << "<ESCAPE> is pressed.\n";
     if (keys[SDL_SCANCODE_RETURN])
        std::cout << "<RETURN> is pressed.\n";
    if(keys[SDL_SCANCODE_UP])
        m_player->moving(0,-5);
    if(keys[SDL_SCANCODE_DOWN])
        m_player->moving(0,+5);
    if(keys[SDL_SCANCODE_LEFT])
        m_player->moving(-5,0);
    if(keys[SDL_SCANCODE_RIGHT])
        m_player->moving(+5,0);
    if(keys[SDL_SCANCODE_SPACE])
    {
       m_bullet = new Bullets();
       m_bullet->load(m_player->getX()+25,m_player->getY()-20,5,15,"bala");
       m_gameBullets.push_back(m_bullet);
        for(int i = 0; i != m_gameBullets.size(); i++)
                m_gameBullets[i]->draw(m_pRenderer, m_texture);
    }
    }
   }
  }
}

void Game::update()
{

m_player->update();

 /*for(unsigned int i = 1; i != m_gameObjects.size(); i++)
 {
    if(checkCollision(m_player, m_gameObjects[i]))
    {
        std::cout << m_gameObjects.size();
        delete m_gameObjects[i];
        m_gameObjects.erase(m_gameObjects.begin() + i);
        break;
    }
 }*/
/* for(unsigned int i = 0; i != m_gameEnemies.size(); i++)
 {
     if (checkCollision(m_gameBullets[i],m_gameEnemies[i]))
        {
            delete m_gameBullets[i];
            delete m_gameEnemies[i];
            m_gameBullets.erase(m_gameBullets.begin() + i);
            m_gameEnemies.erase(m_gameEnemies.begin() + i);
            break;
        }
 }*/
 // Recorre el método update de los objetos en el vector
 time++;
 for(unsigned int i = 0; i != m_gameEnemies.size(); i++)
  {
   m_gameEnemies[i]->update(m_gameEnemies[i]->get_id());
   std::cout<<time<<std::endl;
   if(time==100)
    {
       m_bullet = new Bullets();
       m_bullet->load(m_gameEnemies[i]->getX()+25,m_gameEnemies[i]->getY()+15,5,15,"bala-enemiga");
       m_gameEnemiesBullets.push_back(m_bullet);
       //for(int i = 0; i != m_gameEnemiesBullets.size(); i++)
                m_gameEnemiesBullets[i]->draw(m_pRenderer, m_texture);
       time=0;
    }
  }
  for(unsigned int i = 0; i != m_gameBullets.size(); i++)
  {
   m_gameBullets[i]->update(m_gameBullets[i]->get_id());
  }
  for(unsigned int i = 0; i != m_gameEnemiesBullets.size(); i++)
  {
   m_gameEnemiesBullets[i]->update_enemy();
  }
}

bool Game::checkCollision(GameObject *p1, GameObject *p2)
{
 int leftA, leftB;
 int rightA, rightB;
 int topA, topB;
 int bottomA, bottomB;
 //Calcula la posición del objeto A
 leftA = p1->getX();
 rightA = p1->getX() + p1->getWidth();
 topA = p1->getY();
 bottomA = p1->getY() + p1->getHeight();
 //Calcula la posición del objeto B
 leftB = p2->getX();
 rightB = p2->getX() + p2->getWidth();
 topB = p2->getY();
 bottomB = p2->getY() + p2->getHeight();

 //Si cualquiera de los lados A están fuera de B regresa FALSE
 if( bottomA <= topB ){return false; }
 if( topA >= bottomB ){return false; }
 if( rightA <= leftB ){return false; }
 if( leftA >= rightB ){return false; }

 return true;
}

