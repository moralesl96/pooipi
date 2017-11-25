#ifndef GAME_H_INCLUDED
#define GAME_H_INCLUDED

#include "TextureManager2.h"
#include "GameObject.h"
#include "Player.h"
#include "Enemy.h"
#include <vector>
#include "Bullets.h"

class Game
{
 public:
  bool init(const char* title, int xpos, int ypos, int width, int height, int flags);
  void render();
  void update();
  void handleEvents();
  void clean();
  bool running() { return m_bRunning; }
  bool checkCollision(GameObject *p1, GameObject *p2);

 private:
  SDL_Window *m_pWindow;
  SDL_Renderer *m_pRenderer;
  bool m_bRunning;
  // Declaración de apuntador a GameObject y un vector para ellos
  std::vector<GameObject*> m_gameEnemies;
  std::vector<GameObject*> m_gameBullets;
  std::vector<GameObject*> m_gameEnemiesBullets;
 // std::vector<GameObject*> m_gameBullets;
  Player *m_player;
  Enemy  *m_enemy;
  Bullets *m_bullet;
  int temp;
  int time=0;
  // Declaración de apuntador a TextureManager
  TextureManager *m_texture;
};

#endif // GAME_H_INCLUDED
